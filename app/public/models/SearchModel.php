<?php


class SearchModel extends Database {

    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function search_keyword (string $keyword) {
        try {
            $stmt = $this->db_con->prepare("SELECT * FROM content WHERE title LIKE :keyword AND status = 'publish'");
            $keyword = '%' . $keyword . '%';
            $stmt->bindParam(':keyword', $keyword);
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