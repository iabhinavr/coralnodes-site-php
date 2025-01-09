<?php

use function DI\create;
use function DI\get;

include __DIR__ . '/models/Database.php';
include __DIR__ . '/models/ContentModel.php';
include __DIR__ . '/models/TaxonomyModel.php';
include __DIR__ . '/models/ContentMetadataModel.php';
include __DIR__ . '/models/SearchModel.php';
include __DIR__ . '/models/SitemapModel.php';
include __DIR__ . '/controllers/MainController.php';
include __DIR__ . '/controllers/HomeController.php';
include __DIR__ . '/controllers/ContentController.php';
include __DIR__ . '/controllers/SearchController.php';
include __DIR__ . '/controllers/ArchiveController.php';
include __DIR__ . '/controllers/SitemapController.php';
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
];