<?php

class SitemapController extends MainController {

    private $sitemapModel;
    public function __construct(SitemapModel $sitemapModel) {
        $this->sitemapModel = $sitemapModel;
    }

    public function main($method, $vars = null) {

        if(method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function sitemap_main() {
        $urls = $this->sitemapModel->get_urls();
        $props['urls'] = $urls;
        $this->render('sitemap', $props);
    }

    public function rss_feed() {
        $urls = $this->sitemapModel->get_urls_feed();
        $props['urls'] = $urls;
        $this->render('feed', $props);
    }
}