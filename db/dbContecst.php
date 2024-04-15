<?php
$host = "localhost";
$dbname = "dota2Db";
$port = 3306;
$username = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

try {
    $conn = new PDO("mysql:host={$host};dbname={$dbname};port={$port}", $username, $password, $options);
    
    $meno = filter_input(INPUT_POST, 'meno', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $txt = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_STRING);

    if ($meno && $email && $txt) {
        $sql = "INSERT INTO suggestions (meno, email, txt) VALUES (:meno, :email, :txt)";
        $statement = $conn->prepare($sql);

        $insert = $statement->execute(array(':meno' => $meno, ':email' => $email, ':txt' => $txt));

        if ($insert) {
          header("Location: http://localhost/dota2/thankyou.php");
      } else {
          echo "Failed to insert data.";
      }
    } else {
        echo "Invalid input data.";
    }
} catch (PDOException $e) {
    die("Chyba pripojenia: " . $e->getMessage());
} finally {
    $conn = null;
}
