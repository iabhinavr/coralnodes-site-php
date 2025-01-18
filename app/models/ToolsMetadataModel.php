<?php

class ToolsMetadataModel extends Database {
    private $db_con;

    public function __construct() {
        parent::__construct();
        $this->db_con = $this->db_connect();
    }

    public function getMetaData($meta_key) {
        try {
            $stmt = $this->db_con->prepare("SELECT meta_value FROM tools_metadata WHERE meta_key = :meta_key");
            $stmt->bindParam(":meta_key", $meta_key);
            $stmt->execute();
            $result = $stmt->fetchColumn();

            if(!$result) {
                return ["status" => false, "errorCode" => "missing", "error" => "meta key does not exist"];
            }
            return ["status" => true, "result" => $result];
        }
        catch(PDOException $e) {
            return ["status" => false, "errorCode" => "serverError", "error" => "error fetching metadata"];
        }
    }

    public function addMetaData($meta_key, $meta_value) {
        try {
            $stmt = $this->db_con->prepare("INSERT IGNORE INTO tools_metadata (meta_key, meta_value) VALUES (:meta_key, :meta_value)");
            $stmt->bindParam(":meta_key", $meta_key);
            $stmt->bindParam(":meta_value", $meta_value);
            $stmt->execute();
            return ["status" => true, "result" => "meta data added"];
        }
        catch(PDOException $e) {
            return ["status" => false, "error" => "could not add metadata"];
        }
    }

    public function updateMetaData($meta_key, $meta_value) {
        try {
            $stmt = $this->db_con->prepare("UPDATE tools_metadata SET meta_value = :meta_value WHERE meta_key = :meta_key");
            $stmt->bindParam(":meta_key", $meta_key);
            $stmt->bindParam(":meta_value", $meta_value);
            $stmt->execute();

            if ($stmt->rowCount() === 0) {
                return ["status" => false, "error" => "meta_key does not exist or no changes were made"];
            }
            
            return ["status" => true, "result" => "meta data updated"];
        }
        catch(PDOException $e) {
            return ["status" => false, "error" => "could not update metadata"];
        }
    }

    public function incrementTtfbTestCount($meta_key, $max_value = null) {
        try {

            $this->db_con->beginTransaction();
    

            $stmt = $this->db_con->prepare("SELECT meta_value FROM tools_metadata WHERE meta_key = :meta_key FOR UPDATE");
            $stmt->bindParam(":meta_key", $meta_key);
            $stmt->execute();
            $current_value = $stmt->fetchColumn();
    
            if ($current_value === false) {
                $this->db_con->rollBack();
                return ["status" => false, "error" => "meta_key does not exist"];
            }
    
            $current_int_value = (int)$current_value;
    
            if ($max_value !== null && $current_int_value >= $max_value) {
                $this->db_con->rollBack();
                return ["status" => false, "error" => "limit exceeded"];
            }
    
            $stmt = $this->db_con->prepare("UPDATE tools_metadata SET meta_value = CAST(CAST(meta_value AS UNSIGNED) + 1 AS CHAR) WHERE meta_key = :meta_key");
            $stmt->bindParam(":meta_key", $meta_key);
            $stmt->execute();
    
            $this->db_con->commit();
            return ["status" => true, "result" => "ttfb test count incremented"];
        } catch (PDOException $e) {
            $this->db_con->rollBack();
            return ["status" => false, "error" => "could not increment metadata"];
        }
    }
    

}