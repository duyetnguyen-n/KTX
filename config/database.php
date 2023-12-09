<?php
define('__ROOT__', dirname(__FILE__));
include(__ROOT__.'/config.php');

class Database {
    private $host = servername;
    private $user = username;
    private $password = password;
    private $dbname = dbname;
    private $link;
    private $error;

    public function __construct() {
        $this->connectDB();
    }
    public function getError() {
        return $this->error;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    private function connectDB() {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->link->connect_error) {
            die("Connection Fail: " . $this->link->connect_error);
        }
    }

    public function select($query) {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insert($query) {
        $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    public function delete($query) {
        $delete_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }
}
?>
