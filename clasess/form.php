<?php 
require_once('database.php');

class Forma extends Database{
  protected $connection;

  public function __construct()
  {
    $database = new Database();
    $this->connection = $database->getConnection();
  }
  public function ulozitSpavu($meno,$email,$txt)
  {
    $sql = "INSERT INTO suggestions (meno, email, txt) VALUES (:meno, :email, :txt)";
    $statment=$this->connection->prepare($sql);
    try {
      $insert = $statment->execute(array(':meno' => $meno, ':email' => $email, ':txt' => $txt));
      if ($insert) {
        header("Location: thankyou.php");
      } else {
        echo "Failed to insert data.";
      }
    }
    catch (Exception $e) { 
      http_response_code(500);
      return false;
    }
    
    
  }
}