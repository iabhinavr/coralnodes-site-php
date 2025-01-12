<?php

class ToolsModel extends Database {

    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function create_ttfb_test($data): array {
        try {
            $stmt = $this->db_con->prepare("INSERT INTO ttfb_tests (test_key, test_url, test_user, test_env, test_locations, test_date) VALUES (:test_key, :test_url, :test_user, :test_env, :test_locations, :test_date)");
            $stmt->bindParam(":test_key", $data["test_key"]);
            $stmt->bindParam(":test_url", $data["test_url"]);
            $stmt->bindParam(":test_user", $data["test_user"]);
            $stmt->bindParam(":test_env", $data["test_env"]);
            $stmt->bindParam(":test_locations", $data["test_locations"]);
            $stmt->bindParam(":test_date", $data["test_date"]);
            if($stmt->execute()) {
                return ["status" => true];
            }
            return ["status" => false, "result" => "error creating test"];
        }
        catch(PDOException $e) {
            return ["status" => false, "result" => $e->getMessage()];
        }
    }

    public function get_ttfb_test($test_key): array {
        try {
            $stmt = $this->db_con->prepare("SELECT * FROM ttfb_tests WHERE test_key = :test_key");
            $stmt->bindParam(":test_key", $test_key);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                return ["status" => true, "result" => $result];
            }

            return ["status" => false, "result" => "error fetching test"];
        } catch (PDOException $e) {
            return ["status" => false, "result" => "error fetching test"];
        }
    }
}