<?php

class TaxonomyModel extends Database {

    public $db_con;
    public function __construct() {
        $this->db_con = $this->db_connect();
    }

    public function get_single_content_taxonomies(int $content_id, string $taxonomy_type = 'category') : array {

        try {
            $stmt = $this->db_con->prepare("SELECT tr.content_id, tr.taxonomy_id, t.name, t.type, t.title FROM taxonomy_relations tr INNER JOIN taxonomies t ON tr.taxonomy_id = t.id WHERE tr.content_id = :content_id AND t.type = :taxonomy_type");
            $stmt->bindParam(":content_id", $content_id);
            $stmt->bindParam(":taxonomy_type", $taxonomy_type);

            if(!$stmt->execute()) {
                return ["status" => false, "result" => "Error fetching taxonomy"];
            }

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => "No taxonomies found"];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => $e->getMessage()];
        }
    }

    public function get_multi_content_taxonomies(array $content_ids, string $taxonomy_type = 'category') : array {

        $id_placeholders = [];
        foreach($content_ids as $id) {
            $id_placeholders[] = ":id$id";
        }

        $content_ids_in = implode(",", $id_placeholders);

        try {
            $stmt = $this->db_con->prepare("SELECT tr.content_id, tr.taxonomy_id, t.name, t.type, t.title FROM taxonomy_relations tr INNER JOIN taxonomies t ON tr.taxonomy_id = t.id WHERE tr.content_id in ($content_ids_in) AND t.type = :taxonomy_type");

            foreach($content_ids as &$id) {
                $stmt->bindParam(":id$id", $id);
            }
            $stmt->bindParam(":taxonomy_type", $taxonomy_type);

            if(!$stmt->execute()) {
                return ["status" => false, "result" => "Error fetching taxonomy"];
            }

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => "No taxonomies found"];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => $e->getMessage()];
        }
    }

    public function get_taxonomy_content($args) {

        $arg_defaults = [
            "per_page" => 10,
            "page_no" => 1,
            "type" => 'article',
            "status" => "publish",
            "fields" => ["title", "excerpt", "published_date", "featured_image", "slug"]
        ];

        $args_merged = array_merge($arg_defaults, $args);

        $limit = $args_merged['per_page'];
        $offset = ($args_merged['page_no'] - 1) * $limit;

        try {
            $stmt = $this->db_con->prepare("SELECT c.id, c.title, c.excerpt, c.published_date, c.featured_image, c.slug FROM content c INNER JOIN taxonomy_relations tr ON c.id = tr.content_id INNER JOIN taxonomies t ON t.id = tr.taxonomy_id WHERE t.name = :taxonomy_name AND t.type = :taxonomy_type AND c.status = 'publish' LIMIT :limit OFFSET :offset");

            $stmt->bindParam(":taxonomy_name", $args_merged['taxonomy_name']);
            $stmt->bindParam(":taxonomy_type", $args_merged['taxonomy_type']);
            $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
            $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
            
            if(!$stmt->execute()) {
                return ["status" => false, "result" => ["Error fetching taxonomy"]];
            }

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($result)) {
                return ["status" => false, "result" => ["No taxonomies found"]];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => [$e->getMessage()]];
        }
    }

    public function get_taxonomy_content_count($args) {
        $stmt = $this->db_con->prepare("SELECT count(*) FROM content c INNER JOIN taxonomy_relations tr ON c.id = tr.content_id INNER JOIN taxonomies t ON t.id = tr.taxonomy_id WHERE t.name = :taxonomy_name AND t.type = :taxonomy_type AND c.status = 'publish'");

        $stmt->bindParam(":taxonomy_name", $args['taxonomy_name']);
        $stmt->bindParam(":taxonomy_type", $args['taxonomy_type']);

        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }
}