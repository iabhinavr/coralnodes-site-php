<?php


class SearchModel extends Database {

    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function search_keyword (string $keyword) {
        try {
            $stmt = $this->db_con->prepare("SELECT id, title, slug, featured_image, published_date, modified_date, excerpt, MATCH(title, excerpt) AGAINST(:keyword1 IN NATURAL LANGUAGE MODE) as relevance FROM content WHERE MATCH(title, excerpt) AGAINST(:keyword2 IN NATURAL LANGUAGE MODE) AND status = 'publish' AND `type` = 'article' AND status = 'publish'");
            $stmt->bindParam(':keyword1', $keyword);
            $stmt->bindParam(':keyword2', $keyword);
            if(!$stmt->execute()) {
                return ["status" => false, "result" => "Error searching for the keyword"];

            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => ["No results found"]];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => ["Some error occurred"]];
        }
    }
}