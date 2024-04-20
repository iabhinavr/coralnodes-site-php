<?php

class ContentController extends MainController {

    private $contentModel;
    private $taxonomyModel;
    private $contentMetadataModel;
    private $markdownFormatter;
    private $parseYTEmbeds;
    private $TOC;

    public function __construct(
        ContentModel $contentModel,
        TaxonomyModel $taxonomyModel,
        ContentMetadataModel $contentMetadataModel,
        MarkdownFormatter $markdownFormatter,
        ParseYTEmbeds $parseYTEmbeds,
        TOC $TOC
        ) {
        $this->contentModel = $contentModel;
        $this->taxonomyModel = $taxonomyModel;
        $this->contentMetadataModel = $contentMetadataModel;
        $this->markdownFormatter = $markdownFormatter;
        $this->parseYTEmbeds = $parseYTEmbeds;
        $this->TOC = $TOC;
    }

    public function main($method, $vars = null) {

        if(method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function content_single($vars) {
        $slug = !empty($vars['content']) ? $vars['content'] : false;

        $get_content = $this->contentModel->get_content_by_slug($slug);

        if(!$slug || !$get_content['status']) {
            $this->error_404();
            exit;
        }

        $content = $get_content["result"];

        if($content['status'] !== 'publish') {
            $this->error_404();
            exit;
        }

        switch($content['type']) {
            case 'article':
                $this->article_single($content);
                break;
            case 'page':
                $this->page_single($content);
                break;
        }
        
        
    }

    public function article_index($vars = null) {
        $args = [
            "per_page" => 10,
            "page_no" => 1,
            "type" => 'article',
            "fields" => ["id", "title", "excerpt", "published_date", "featured_image", "slug"]
        ];

        if(!empty($vars['pageNo'])) {
            $args['page_no'] = $vars['pageNo'];
        }

        $props = [
            'page_title' => 'CoralNodes'
        ];

        $props['page_no'] = $args['page_no'];

        $props['total_posts'] = $this->contentModel->get_content_count('article');
        $props['total_pages'] = ceil($props['total_posts'] / $args['per_page']);


        if($props['page_no'] > $props['total_pages']) {
            $this->error_404();
            exit;
        }

        $articles = $this->contentModel->get_contents($args);        

        foreach($articles as $article) {

            $id = (int)$article['id'];
            $published_obj = DateTime::createFromFormat('Y-m-d H:i:s', $article['published_date']);
            $published_date = $published_obj->format('M j, Y');

            $props['articles'][$id] = [
                'id' => $article['id'],
                'title' => $article['title'],
                'excerpt' => $article['excerpt'],
                'published_date' => $published_date,
                'featured_image' => !empty($article['featured_image']) ? "https://cdn-2.coralnodes.com/coralnodes/uploads/medium/" . $article['featured_image'] : "/assets/images/default-image.jpg",
                'slug' => $article['slug'],
                'categories' => [],
                'tags' => []
            ];
            
        }

        $content_ids = [];

        foreach($articles as $article) {
            $content_ids[] = $article['id'];
        }

        $get_categories = $this->taxonomyModel->get_multi_content_taxonomies($content_ids, 'category');

        if($get_categories['status']) {
            foreach($get_categories['result'] as $row) {
                $content_id = $row['content_id'];
                $props['articles'][$content_id]['categories'][] = [
                    'taxonomy_id' => $row['taxonomy_id'],
                    'name' => $row['name'],
                    'title' => $row['title']
                ];
            }
        }

        $get_tags = $this->taxonomyModel->get_multi_content_taxonomies($content_ids, 'tag');

        if($get_tags['status']) {
            foreach($get_tags['result'] as $row) {
                $content_id = $row['content_id'];
                $props['articles'][$content_id]['tags'][] = [
                    'taxonomy_id' => $row['taxonomy_id'],
                    'name' => $row['name'],
                    'title' => $row['title']
                ];
            }
        }

        $props['seo_data'] = [
            'title' => 'Articles | CoralNodes',
            'canonical' => "https://www.coralnodes.com/articles/"
        ];

        


        $this->render('header', $props);
        $this->render('article-index', $props);
        $this->render('footer', $props);
        
    }

    public function article_single($article) {

        $props = [
            'id' => $article['id'],
            'title' => $article['title'],
            'modified_date' => $article['modified_date'],
            'excerpt' => $article['excerpt'],
            'content_html' => $this->markdownFormatter->content_html($article['body'], false)
        ];

        $props['content_html'] = $this->TOC->toc($props['content_html']);
        $props['content_html'] = $this->parseYTEmbeds->parse($props['content_html']);
        $props['content_html'] = $this->markdownFormatter->nofollow_links($props['content_html']);

        /**
         * Fetch author bio and add it to props
         */

        $props['author_bio'] = [];

        $get_author_bio = $this->contentModel->get_content_by_slug("author-bio-short");

        if($get_author_bio['status']) {
            $props['author_bio'] = $get_author_bio['result'];
        }

        /**
         * Fetch related posts and add it to props
         */

        $get_related_content = $this->contentMetadataModel->get_related_content($article['id']);

        if($get_related_content['status']) {
            $related_content = $get_related_content['result'];
            foreach($related_content as $r) {
                $props['related_content'][] = [
                    'title' => $r['title'],
                    'featured_image' => $r['featured_image'],
                    'slug' => $r['slug'],
                ];
            }
        }

        /**
         * Fetch SEO data
         * Prepare the SEO Data Array and add it to props
         * Prepare the JSON-LD Markup and add it to props
         */
        
        $props['seo_data'] = [];

        $get_content_seo = $this->contentMetadataModel->get_content_seo_data($article['id'], 'article');

        if($get_content_seo['status']) {

            $title = $article['title'];
            $description = $article['excerpt'];

            $content_seo = $get_content_seo['result'];

            if(is_array($content_seo)) {
                foreach($content_seo as $row) {
                    switch($row['meta_key']) {
                        case 'seo_title' :
                            $title = $row['meta_value'];
                            break;
                        case 'meta_description' :
                            $description = $row['meta_value'];
                            break;
                    }
                }
            }
            

            $row = $content_seo[0];

            $seo_data = [
                "title" => $title,

                "canonical" => "https://www.coralnodes.com/" . $article['slug'] . "/",

                "meta_properties" => [
                    "og:description" => $description,
                    "og:locale" => "en_IN",
                    "og:url" => "https://www.coralnodes.com/" . $article['slug'] . "/",
                    "og:site_name" => "CoralNodes",
                    "article:published_time" => iso_8601_date($row['published_date']),
                    "article:modified_time" => iso_8601_date($row['modified_date']),
                    "og:image" => "https://cdn-2.coralnodes.com/coralnodes/uploads/" . $row['featured_image'] . "/",
                ],
                "meta_names" => [
                    "description" => $description,
                    "author" => "Abhinav",
                    "twitter_card" => "summary_large_image",
                    "twitter_creator" => "@https://www.twitter.com/iabhinavr",
                    "twitter:label1" => "Written by",
                    "twitter:data1" => "Abhinav",
                ],
                
            ];

            $json_ld_array = [
                "@context" => "http://schema.org",
                "@type" => "Article",
                "headline" => $title,
                "mainEntityOfPage" => [
                    "@type" => "WebPage",
                    "@id" => "https://www.coralnodes.com/" . $article['slug'] . "/"
                ],
                "author" => [
                    "@type" => "Person",
                    "name" => "Abhinav"
                ],
                "datePublished" => iso_8601_date($row['published_date']),
                "dateModified" => iso_8601_date($row['modified_date']),
                "description" => $description,
                "articleSection" => "Website Platforms",
                "inLanguage" => "en-IN",
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "CoralNodes"
                ],
                "image" => [
                    "@type" => "ImageObject",
                    "url" => "https://cdn-2.coralnodes.com/coralnodes/uploads/" . $row['featured_image'] . "/",
                    "inLanguage" => "en-IN",
                    "caption" => $title
                ]
            ];

            $props['seo_data'] = $seo_data;
            $props['seo_data']['json_ld'] = json_encode($json_ld_array, JSON_PRETTY_PRINT);
        }

        $this->render('header', $props);
        $this->render('article-single', $props);
        $this->render('footer', $props);
    }

    public function page_single($page) {

        $props = [
            'id' => $page['id'],
            'title' => $page['title'],
            'excerpt' => $page['excerpt'],
            'content_html' => $this->markdownFormatter->content_html($page['body'], false)
        ];

        /**
         * Fetch SEO data
         * Prepare the SEO Data Array and add it to props
         * Prepare the JSON-LD Markup and add it to props
         */
        
        $props['seo_data'] = [
            'title' => $page['title'],
            "canonical" => "https://www.coralnodes.com/" . $page['slug'] . "/",
        ];

        $get_content_seo = $this->contentMetadataModel->get_content_seo_data($page['id'], 'page');

        if($get_content_seo['status']) {

            $title = $description = '';

            $content_seo = $get_content_seo['result'];
            foreach($content_seo as $row) {
                switch($row['meta_key']) {
                    case 'seo_title' :
                        $title = $row['meta_value'];
                        break;
                    case 'meta_description' :
                        $description = $row['meta_value'];
                        break;
                }
            }

            $row = $content_seo[0];

            $props['seo_data'][] = [
                "meta_names" => [
                    "description" => $description,
                ],
                
            ];
        }

        $this->render('header', $props);
        $this->render('page-single', $props);
        $this->render('footer', $props);
    }

    public function error_404() {
        header('HTTP/1.1 404 Not Found');
        $props = [
            'page_title' => '404 Not Found'
        ];

        $props['seo_data']['title'] = 'Error 404 | Page Not Found';

        $this->render('header', $props);
        $this->render('error-404', $props);
        $this->render('footer', $props);
    }
}