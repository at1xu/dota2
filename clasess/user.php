<?php
require_once "database.php";

class User extends Database {
    private $roles;

    public function __construct() { 
        parent::__construct();
        $this->role = "user";
    }

    public function register($login, $email, $pasword) {
        try {
            $hashedPassword = password_hash($pasword, PASSWORD_BCRYPT);

            $sql = "SELECT * FROM users WHERE login = ? OR email = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$login, $email]);
            $existingUser = $statement->fetch();
            if ($existingUser) {
                throw new Exception("Používateľ už existuje.");
            }

            $sql = "INSERT INTO users (login, email, password, role) VALUES (?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$login, $email, $hashedPassword, $this->roles]);
        } catch (Exception $e) {
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
        }
    }

    public function login($email, $password) {
        try {
            $sql = "SELECT * FROM users WHERE email = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$email]);
            $user = $statement->fetch();
            if (!$user) {
                throw new Exception("Používateľ s daným menom neexistuje.");
            }
    
            $storedPassword = $user['password'];
            if (!password_verify($password, $storedPassword)) {
                throw new Exception("Nesprávne heslo.");
            }
    
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            
            header('Location: index.php');
            exit();
        } catch (Exception $e) {
            echo "Chyba pri prihlásení: " . $e->getMessage();
        }
    }
    

   

    public function isAdmin() {
        session_start();
        if (isset($_SESSION['role'], $_SESSION['user_id'])) {
            if ($_SESSION['role'] == 'admin') {
                echo "admin je tu";
                return true;
            } else {
                echo "session sa spustil, ale nie je admin";
                return false;
            }
        } else {
            echo "nenašiel sa session";
            return false;
        }
    }
    public function getUserById($userId) {
        try {
            $sql = "SELECT * FROM users WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$userId]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "" . $e->getMessage();
            return null;
        }
    }
    public function updateUser($userId, $login, $email, $password, $firstName, $lastName) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "SELECT * FROM users WHERE (login = ? OR email = ?) AND id != ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$login, $email, $userId]);
        
            $sql = "UPDATE users SET login = ?, email = ?, password = ?, fistname = ?, lastname = ? WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$login, $email, $hashedPassword, $firstName, $lastName, $userId]);
        } catch (Exception $e) {
            echo "Помилка при оновленні користувача: " . $e->getMessage();
        }
    }
    
    
}

