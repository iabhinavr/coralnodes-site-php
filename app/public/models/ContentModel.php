<?php

class ContentModel extends Database
{
    private $db_con;

    function __construct()
    {
        $this->db_con = $this->db_connect();
    }

    public function get_content(int $id, string $type = 'article', string $status = 'publish')
    {
        try {
            $stmt = $this->db_con->prepare("SELECT * FROM content WHERE id = :id AND type = :type AND status = :status");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":type", $type);
            $stmt->bindParam(":status", $status);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                return ["status" => true, "result" => $result];
            }

            return ["status" => false, "result" => "Error fetching article"];
        } catch (PDOException $e) {
            return ["status" => false, "result" => $e->getMessage()];
        }
    }

    public function get_content_by_slug(string $slug)
    {
        try {
            $stmt = $this->db_con->prepare("SELECT * FROM content WHERE slug = :slug");
            $stmt->bindParam(":slug", $slug, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                return ["status" => true, "result" => $result];
            }

            return ["status" => false, "result" => "Content not found"];
        } catch (PDOException $e) {
            return ["status" => false, "result" => $e->getMessage()];
        }
    }

    public function get_contents($args = [])
    {

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
        $fields = implode(", ", $args_merged['fields']);

        try {
            $query = "SELECT $fields FROM content WHERE type = :type AND status = :status ORDER BY published_date DESC LIMIT :limit OFFSET :offset";
            $stmt = $this->db_con->prepare($query);
            $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
            $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
            $stmt->bindParam(":type", $args_merged['type']);
            $stmt->bindParam(":status", $args_merged['status']);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function get_content_count($type = 'article')
    {
        $stmt = $this->db_con->prepare("SELECT count(*) FROM content WHERE type = :type");
        $stmt->bindParam(":type", $type);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }

}