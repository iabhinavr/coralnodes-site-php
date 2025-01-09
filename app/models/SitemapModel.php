<?php

class SitemapModel extends Database {
    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function get_urls() {
        try {
            $stmt = $this->db_con->prepare("SELECT slug, modified_date FROM content WHERE status = 'publish' AND type = 'article' ORDER BY modified_date DESC");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        catch(PDOException $e) {
            return false;
        }
    }

    public function get_urls_feed() {
        try {
            $stmt = $this->db_con->prepare("SELECT title, excerpt, slug, published_date, modified_date FROM content WHERE status = 'publish' AND type = 'article' ORDER BY modified_date DESC LIMIT 20");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        catch(PDOException $e) {
            return false;
        }
    }

}