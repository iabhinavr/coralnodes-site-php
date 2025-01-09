<?php


class RedirectMiddleware {
    private $db_con;
    public function __construct(Database $database) {
        $this->db_con = $database->db_connect();
    }

    public function check_redirect($path) {
        try {
            $stmt = $this->db_con->prepare("SELECT destination_url FROM redirects WHERE source_url = :source_url");
            $stmt->bindParam(":source_url", $path);
            $stmt->execute();
            $result = $stmt->fetchColumn();
            
            if($result) {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: $result");
                exit;
            }
        }
        catch(PDOException $e) {

        }
    }
}