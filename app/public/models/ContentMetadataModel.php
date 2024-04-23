<?php

class ContentMetadataModel extends Database {

    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function get_content_metadata_all(int $content_id) {
        try {
            $stmt = $this->db_con->prepare("SELECT meta_key, meta_value FROM content_metadata WHERE content_id = :id");
            $stmt->bindParam(":content_id", $content_id);
            if(!$stmt->execute()) {
                return ["status" =>false, "result" => "Error fetching metadata"];
            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => "No results found"];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => "Some error occurred"];
        }
    }

    public function get_related_content(int $content_id) {
        try {
            $stmt = $this->db_con->prepare("SELECT cm.content_id, cm.meta_key, cm.meta_value, c.title, c.featured_image, c.slug, c.type FROM content_metadata cm INNER JOIN content c ON cm.meta_value = c.id WHERE cm.content_id = :content_id AND cm.meta_key = 'related_post'");
            $stmt->bindParam(":content_id", $content_id);
            if(!$stmt->execute()) {
                return [ "status" => false, "result" => "Error fetching related content" ];
            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return [ "status" => false, "result" => "No related content found" ];
            }
            return [ "status" => true, "result" => $result ];
        }
        catch(PDOException $e) {
            return [ "status" => false, "result" => "Some error occurred" ];
        }
    }

    public function get_content_seo_data(int $content_id, string $content_type = 'article') {
        try {
            $stmt = $this->db_con->prepare("SELECT c.id, c.title, c.slug, c.published_date, c.modified_date, c.featured_image, cm.meta_key, cm.meta_value FROM content c LEFT JOIN content_metadata cm ON c.id = cm.content_id WHERE c.id = :content_id");
            $stmt->bindParam(":content_id", $content_id);
            if(!$stmt->execute()) {
                return ["status" => false, "result" => "Error fetching seo data"];
            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => "No data found"];
            }

            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => "Some error occurred"];
        }
    }
}