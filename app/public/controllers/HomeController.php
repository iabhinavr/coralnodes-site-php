<?php

class HomeController extends MainController {

    private $contentModel;
    private $contentMetadataModel;
    private $TOC;
    private $markdownFormatter;

    public function __construct(
    ContentModel $contentModel,
    ContentMetadataModel $contentMetadataModel,
    MarkdownFormatter $markdownFormatter,
    TOC $TOC) {
        $this->contentModel = $contentModel;
        $this->contentMetadataModel = $contentMetadataModel;
        
        $this->markdownFormatter = $markdownFormatter;
        $this->TOC = $TOC;
    }

    public function main($method, $vars = null) {

        if(method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function index($vars = null) {
        
        $slug = 'site-intro';

        $get_content = $this->contentModel->get_content_by_slug($slug);

        if(!$slug || !$get_content['status']) {
            $this->error_404();
            exit;
        }

        $content = $get_content['result'];

        $props = [
            'id' => $content['id'],
            'title' => "CoralNodes | Web Development, Coding, Tech",
            'excerpt' => "A place where you can find articles related to web development, coding, digital marketing, and tech in general",
            'content_html' => $this->markdownFormatter->content_html($content['body'], false)
        ];

        $props['content_html'] = $this->TOC->toc($props['content_html']);

        /**
         * Fetch SEO data
         * Prepare the SEO Data Array and add it to props
         * Prepare the JSON-LD Markup and add it to props
         */
        
        $props['seo_data'] = [
            'title' => $content['title'],
            "canonical" => "https://www.coralnodes.com/" . $content['slug'] . "/",
        ];

        $get_content_seo = $this->contentMetadataModel->get_content_seo_data($content['id'], 'page');

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
        $this->render('home-page', $props);
        $this->render('footer', $props);
        
    }

}