<?php

class ToolsModel extends Database {

    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function create_ttfb_test($data): array {
        try {
            $stmt = $this->db_con->prepare("INSERT INTO ttfb_tests (test_key, test_user, test_env, test_date, test_hash) VALUES (:test_key, :test_user, :test_env, :test_date, :test_hash)");
            $stmt->bindParam(":test_key", $data["test_key"]);
            $stmt->bindParam(":test_user", $data["test_user"]);
            $stmt->bindParam(":test_env", $data["test_env"]);
            $stmt->bindParam(":test_date", $data["test_date"]);
            $stmt->bindParam(":test_hash", $data["test_hash"]);
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

    public function verify_ttfb_test_hash($test_key, $string_to_hash) {

        $get_test_resp = $this->get_ttfb_test($test_key);

        if($get_test_resp["status"] !== true) {
           return $get_test_resp; 
        }

        $test = $get_test_resp["result"];

        $input_hash = hash('sha256', $string_to_hash);

        if(hash_equals($test["test_hash"], $input_hash)) {
            return ["status" => true, "result" => "hash successfully verified", "test" => $test];
        }
        return ["status" => false, "result" => "hash verification failed"];
    }
}