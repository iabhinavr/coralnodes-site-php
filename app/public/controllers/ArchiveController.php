<?php

class ArchiveController extends MainController {
    private $taxonomyModel;

    public function __construct(TaxonomyModel $taxonomyModel) {
        $this->taxonomyModel = $taxonomyModel;
    }

    public function main($method, $vars = null, $queryParams = []) {

        if(method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function taxonomy_content($vars) {

        $props = [
            'page_title' => 'CoralNodes'
        ];

        $args = [
            "per_page" => 10,
            "page_no" => 1,
            "type" => 'article',
            "fields" => ["id", "title", "excerpt", "published_date", "featured_image", "slug"],
        ];

        if(!empty($vars['categoryName'])) {
            $args['taxonomy_name'] = $vars['categoryName'];
            $args['taxonomy_type'] = 'category';
            $props['page_title'] = "showing articles filed under the category '{$args['taxonomy_name']}'";
            $props['url_base'] = "/category/{$args['taxonomy_name']}";
        }
        else if(!empty($vars['tagName'])) {
            $args['taxonomy_name'] = $vars['tagName'];
            $args['taxonomy_type'] = 'tag';
            $props['page_title'] = "showing articles tagged '{$args['taxonomy_name']}'";
            $props['url_base'] = "/tag/{$args['taxonomy_name']}";
        }
        else {
            $this->error_404();
            exit;
        }

        if(!empty($vars['pageNo'])) {
            $args['page_no'] = $vars['pageNo'];
        }

        $props['page_no'] = $args['page_no'];

        $props['total_posts'] = $this->taxonomyModel->get_taxonomy_content_count($args);
        $props['total_pages'] = ceil($props['total_posts'] / $args['per_page']);

        if(!empty($vars['categoryName']) && $props['total_posts'] > 1) {
            $props['page_title'] = "{$props['total_posts']} articles found under '{$args['taxonomy_name']}'";
        }
        else if (!empty($vars['tagName']) && $props['total_posts'] > 1) {
            $props['page_title'] = "{$props['total_posts']} articles tagged '{$args['taxonomy_name']}'";
        }
        


        if($props['page_no'] > $props['total_pages']) {
            $this->error_404();
            exit;
        }

        

        $articles = $this->taxonomyModel->get_taxonomy_content($args);

        foreach($articles["result"] as $article) {

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
            ];
            
        }

        $props['seo_data'] = [
            'title' => $props['page_title'],
            'canonical' => ""
        ];


        $this->render('header', $props);
        $this->render('archive', $props);
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