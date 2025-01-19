<?php

use Aws\Lambda\LambdaClient;

use function DI\create;
use function DI\get;
use DI\Container;

use GuzzleHttp\HandlerStack;
use Aws\Handler\GuzzleV6\GuzzleHandler;

include __DIR__ . '/models/Database.php';
include __DIR__ . '/models/ContentModel.php';
include __DIR__ . '/models/TaxonomyModel.php';
include __DIR__ . '/models/ContentMetadataModel.php';
include __DIR__ . '/models/SearchModel.php';
include __DIR__ . '/models/SitemapModel.php';
include __DIR__ . '/models/ToolsModel.php';
include __DIR__ . '/models/ToolsMetadataModel.php';
include __DIR__ . '/controllers/MainController.php';
include __DIR__ . '/controllers/HomeController.php';
include __DIR__ . '/controllers/ContentController.php';
include __DIR__ . '/controllers/SearchController.php';
include __DIR__ . '/controllers/ArchiveController.php';
include __DIR__ . '/controllers/SitemapController.php';
include __DIR__ . '/controllers/ToolsController.php';
include __DIR__ . '/lib/MarkdownFormatter.php';
include __DIR__ . '/lib/TOC.php';
include __DIR__ . '/lib/ParseYTEmbeds.php';

include __DIR__ . '/middlewares/RedirectMiddleware.php';

return [
    'Database' => create(Database::class),
    'ContentModel' => create(ContentModel::class),

    'MainController' => create(MainController::class),
    'HomeController' => create(HomeController::class)
        ->constructor(get('ContentModel'), get('ContentMetadataModel'), get('MarkdownFormatter'), get('TOC')),
    'ContentController' => create(ContentController::class)
        ->constructor(get('ContentModel'), get('TaxonomyModel'), get('ContentMetadataModel'), get('MarkdownFormatter'), get('ParseYTEmbeds'), get('TOC')),
    'SearchController' => create(SearchController::class)
        ->constructor(get('SearchModel')),
    'ArchiveController' => create(ArchiveController::class)
        ->constructor(get('TaxonomyModel')),
    'SitemapController' => create(SitemapController::class)
        ->constructor(get('SitemapModel')),
    

    'RedirectMiddleware' => create(RedirectMiddleware::class)
        ->constructor(get('Database')),

    'SharedGuzzleHandler' => function () {
        $handlerStack = GuzzleHttp\HandlerStack::create();
        return new GuzzleHttp\Handler\CurlMultiHandler(['handler' => $handlerStack]);
    },

    'LambdaClientFactory' => function(Container $container) {
        return function (string $region) use ($container) {
            return new LambdaClient (
                [
                    'region' => $region,
                    'version' => '2015-03-31',
                    'credentials' => [
                        'key' => $_ENV['AWS_ACCESS_KEY_ID'],
                        'secret' => $_ENV['AWS_SECRET_ACCESS_KEY'],
                    ],
                    'http_handler' => $container->get('SharedGuzzleHandler'),
                ]
            );
        };
    },

    'ToolsController' => create(ToolsController::class)
        ->constructor(get('LambdaClientFactory'), get('ToolsModel'), get('ToolsMetadataModel')),

    
];