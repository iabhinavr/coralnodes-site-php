<?php

define('APP_DIR', __DIR__ . '/../');
define('START_TIME', microtime(true));

function log_exec_time() {
    $end_time = microtime(true);
    $exec_time = ($end_time - START_TIME)*1000;
    file_put_contents(APP_DIR . "/logs/times.txt", $_SERVER['REQUEST_URI'] . ": " . $exec_time . "ms\n", FILE_APPEND);
}

// register_shutdown_function('log_exec_time');

use DI\ContainerBuilder;
use Symfony\Component\Dotenv\Dotenv;

define(constant_name: "CDN_URL", value: "https://cdn.coralnodes.com");

require '../vendor/autoload.php';
require '../lib/utils.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');



if(_is_local()) {
    ini_set('xdebug.var_display_max_depth', 10);
    ini_set('xdebug.var_display_max_children', 256);
    ini_set('xdebug.var_display_max_data', 1024);
}
else {
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('log_errors', 0);
}

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/../definitions.php');
$container = $containerBuilder->build();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'HomeController@index');
    $r->addRoute('GET', '/blog/', 'ContentController@article_index');
    $r->addRoute('GET', '/feed/', 'SitemapController@rss_feed');
    $r->addRoute('GET', '/search/', 'SearchController@search_main');
    $r->addRoute('GET', '/sitemap.xml', 'SitemapController@sitemap_main');
    $r->addRoute('GET', '/topics/', 'ArchiveController@topics');
    $r->addRoute('GET', '/{content}/', 'ContentController@content_single');
    $r->addRoute('GET', '/blog/page/{pageNo}/', 'ContentController@article_index');
    $r->addRoute('GET', '/category/{categoryName}/', 'ArchiveController@taxonomy_content');
    $r->addRoute('GET', '/tag/{tagName}/', 'ArchiveController@taxonomy_content');
    $r->addRoute('GET', '/category/{categoryName}/page/{pageNo}/', 'ArchiveController@taxonomy_content');
    $r->addRoute('GET', '/tag/{tagName}/page/{pageNo}/', 'ArchiveController@taxonomy_content');

    $r->addRoute('GET', '/tools/ttfb-check/', 'ToolsController@ttfb_check_page');
    $r->addRoute('POST', '/tools/ttfb-check/', 'ToolsController@ttfb_check_post');
    
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$queryString = parse_url($uri, PHP_URL_QUERY);
$queryParams = [];

if(!empty($queryString)) {
    parse_str($queryString, $queryParams);
}

// --- Middlewares ---

$urlComponents = parse_url($uri);
$path = isset($urlComponents['path']) ? $urlComponents['path'] : '';
$extension = pathinfo($path, PATHINFO_EXTENSION);

// redirect non-slashed to slashed

if(empty($queryString) && $extension !== 'php' && $extension !== 'xml') {

    if(substr($path, -1) !== '/') {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: $uri/");
        exit;
    }
}
// perform external redirects


$redirectMiddleware = $container->get('RedirectMiddleware');
$redirectMiddleware->check_redirect($path);

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {

    case FastRoute\Dispatcher::NOT_FOUND:
        
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;

    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        list($controller_name, $method) = explode("@", $handler, 2);

        $controller = $container->get($controller_name);

        $controller->main($method, $vars, $queryParams);
        break;

}