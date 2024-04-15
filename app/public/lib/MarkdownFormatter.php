<?php

class MarkdownFormatter {

    private $parsedown;
    private $dom;
    private $xpath;
    private $html;
    public function __construct(Parsedown $parsedown) {
        $this->parsedown = $parsedown;
        $this->html = '';
        $this->dom = new DOMDocument('1.0', 'UTF-8');
        
    }

    public function content_html(string $markdown, bool $insert_toc) {
        $html = $this->convert_to_html($markdown);
        return $html;
    }

    public function convert_to_html(string $markdown) {
        $html = $this->parsedown->text($markdown);
        return $html;
    }

    public function nofollow_links($html) {
        @$this->dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD);
        $this->xpath = new DOMXpath($this->dom);
        $promotional_links = $this->xpath->query('//a[contains(@href, "/go/")]');

        foreach($promotional_links as $p) {
            $p->setAttribute("rel", "nofollow noreferrer");
            $p->setAttribute("target", "_blank");
        }

        $html = @$this->dom->saveHTML();

        $html = str_replace("<html><body>", "", $html);
        $html = str_replace("</body></html>", "", $html);

        return $html;
    }

    public function insert_toc($html) {

    }

}