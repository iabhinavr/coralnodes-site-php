<?php

class ParseYTEmbeds
{

    public $content;
    public $dom;
    public $embed_elements;
    public $xpath;
    public $cache_dir;
    public $cdn_url;

    public function __construct()
    {
    }

    public function get_embeds()
    {
        $embed_nodes = $this->xpath->query("//div[contains(@class, 'yt-embed')]");

        for ($i = 0; $i < $embed_nodes->length; $i++) {
            $node = $embed_nodes->item($i);
            $this->embed_elements[$i]['node'] = $node;

            $iframes = $node->getElementsByTagName('iframe');
            $iframe = $iframes->item(0);
            $this->embed_elements[$i]['src'] = $iframe->getAttribute('src');
            $path = parse_url($this->embed_elements[$i]['src'], PHP_URL_PATH);
            $path = ltrim($path, '/');
            $path_parts = explode('/', $path);
            $vid_id = $path_parts[1];
            $this->embed_elements[$i]['vid_id'] = $vid_id;




            if (!file_exists($this->cache_dir . $vid_id . '.webp')) {
                $thumbnail = file_get_contents("https://i.ytimg.com/vi_webp/" . $vid_id . "/maxresdefault.webp");
                file_put_contents($this->cache_dir . $vid_id . ".webp", $thumbnail);
            }
        }

        if (!empty($this->embed_elements)) {
            $this->modify_embed();
        }
    }

    public function modify_embed()
    {
        
        foreach ($this->embed_elements as $e) {
            
            $iframes = $e['node']->getElementsByTagName('iframe');
            $iframe = $iframes->item(0);

            $e['node']->removeChild($iframe);

            $html = '';
            $html .= '<div class="vid-wrapper-16-by-9" style="background-image: url(/assets/yt-cache/' . $e['vid_id'] . '.webp)">';
            $html .= '<div class="vid-overlay-wrapper">';
            $html .= '<div class="vid-play-btn"></div>';
            $html .= '<div class="vid-overlay-bottom">';
            $html .= '<div class="vid-overlay-notify">By playing this video, you agree to <a href="https://www.youtube.com/t/terms" target="_blank" rel="nofollow noopener noreferrer">YouTube\'s Terms</a></div>';
            $html .= '<a href="https://www.youtube.com/watch?v=' . $e['vid_id'] . '" class="vid-overlay-ext" target="_blank">Watch on YouTube &rarr;</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<iframe data-src="' . $e['src'] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            $html .= '</div>';

            $new_dom = new DomDocument('1.0', 'UTF-8');
            @$new_dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD);
            $element = $new_dom->documentElement;

            $imported_element = @$this->dom->importNode($element, true);

            @$e['node']->insertBefore($imported_element);
        }

        $this->content = @$this->dom->saveHTML();

        $this->content = str_replace("<html><body>", "", $this->content);
        $this->content = str_replace("</body></html>", "", $this->content);
    }

    public function parse($content)
    {
        $this->content = $content;
        $this->dom = new DOMDocument('1.0', 'UTF-8');

        @$this->dom->loadHTML(mb_convert_encoding($this->content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NODEFDTD);

        $this->embed_elements = [];

        $this->xpath = new DOMXpath($this->dom);

        $this->cache_dir = 'assets/yt-cache/';
        $this->cdn_url = "https://wp.codingreflections.com/";
        $this->get_embeds();
        return $this->content;
    }

    // replace youtube embeds with nocookie version

    public function replace_youtube_embeds_nocookie($content)
    {
        $content = str_replace('https://www.youtube.com/embed/', 'https://www.youtube-nocookie.com/embed/', $content);
        return $content;
    }
}