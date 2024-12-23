<?php


class SearchController extends MainController {

    private $searchModel;

    public function __construct(SearchModel $searchModel) {
        $this->searchModel = $searchModel;
    }

    public function main($method, $vars = null, $queryParams = []) {

        if(method_exists($this, $method)) {
            $this->$method($queryParams);
        }
    }

    public function search_main($queryParams = null) {

        if(empty($queryParams['keyword'])) {
            $props = [
                'page_title' => 'Search this site',
                'seo_data' => [
                    'title' => 'Search this site'
                ],
                'search_results' => null,
            ];
        }
        else {
            $keyword = !empty($queryParams['keyword']) ? trim(string: $queryParams['keyword']) : "";

            $search_results = $this->searchModel->search_keyword($keyword);

            if(!$search_results['status']) {
                $props = [
                    'page_title' => 'No results found',
                    'seo_data' => [
                        'title' => 'No results found'
                    ],
                    'search_results' => false,
                ];
            }
            else {
                $props = [
                    'page_title' => 'Showing results for ""',
                    'seo_data' => [
                        'title' => 'Showing results for "' . $keyword . '"'
                    ],
                ];

                // it's already sorted, so take the first element

                $highest_relevance = $search_results['result'][0]['relevance'];
                
                foreach($search_results['result'] as $s) {
        
                    if($s['relevance'] < $highest_relevance/4) {
                        continue;
                    }
                    
                    $id = (int)$s['id'];
                    $published_obj = DateTime::createFromFormat('Y-m-d H:i:s', $s['published_date']);
                    $published_date = $published_obj->format('M j, Y');
        
                    $props['search_results'][$id] = [
                        'id' => $s['id'],
                        'title' => $s['title'],
                        'excerpt' => $s['excerpt'],
                        'published_date' => $published_date,
                        'featured_image' => !empty($s['featured_image']) ? "https://cdn-2.coralnodes.com/coralnodes/uploads/" . $s['featured_image'] : "/assets/images/default-image.jpg",
                        'slug' => $s['slug'],
                    ];
                    
                }
            }
        }
        
        $this->render('header', $props);
        $this->render('search', $props);
        $this->render('footer', $props);
    }
}