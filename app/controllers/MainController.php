<?php

class MainController {
    public function render($template, $props = []) {
        ob_start();
        include APP_DIR . 'views/' . $template . '.php';
        $output = ob_get_clean();
        echo $output;
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