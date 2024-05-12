<?php
require_once __DIR__ . '/../db/config.php';

class Database {
  protected $conn;

  public function __construct() {
      $this->connect();
  }

    public function connect() {
      $config = DATABASE;
      $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
      try {
          $this->conn = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';port=' . $config['port'], $config['user_name'], $config['password'], $options);
      } catch (PDOException $e) {
          die('Connection failed: ' . $e->getMessage());
      }
  }

  public function getConnection() {
      return $this->conn;
  }
}
