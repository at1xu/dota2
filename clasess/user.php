<?php
require_once "database.php";

class User extends Database {
    private $roles;

    public function __construct() { 
        parent::__construct();
        $this->roles = "user";
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
                throw new Exception("Користувач з цією електронною адресою не знайдений.");
            }
    
            $storedPassword = $user['password'];
            if (!password_verify($password, $storedPassword)) {
                throw new Exception("Неправильний пароль.");
            }
    
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            
            header('Location: index.php');
            exit();
        } catch (Exception $e) {
            error_log("" . $e->getMessage(), 0);
            echo "Помилка при вході. Будь ласка, спробуйте ще раз або зверніться до адміністратора.";
        }
    }
    
    

   

    public function isAdmin() {
        if (isset($_SESSION['role'], $_SESSION['user_id'])) {
            if ($_SESSION['role'] == 'admin') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function getUserById($userId) {
        try {
            $sql = "SELECT * FROM users WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$userId]);
            $user = $statement->fetch();
            return $user; // Додайте цей рядок для повернення користувача
        } catch (Exception $e) {
            echo "Помилка при отриманні користувача: " . $e->getMessage();
        }
    }

    
    public function updateUser($userId, $login, $email, $password, $firstName, $lastName, $image) {
        try {
            $currentUser = $this->getUserById($userId);

            $updatedLogin = isset($login) ? $login : $currentUser['login'];
            $updatedEmail = isset($email) ? $email : $currentUser['email'];
            $updatedPassword = isset($password) ? password_hash($password, PASSWORD_BCRYPT) : $currentUser['password'];
            $updatedFirstName = isset($firstName) ? $firstName : $currentUser['firstname'];
            $updatedLastName = isset($lastName) ? $lastName : $currentUser['lastname'];
            $updatedImage = isset($image) ? $image : $currentUser['image'];

            $sql = "UPDATE users SET login = ?, email = ?, password = ?, firstname = ?, lastname = ?, image = ? WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute([$updatedLogin, $updatedEmail, $updatedPassword, $updatedFirstName, $updatedLastName, $updatedImage, $userId]);

            if ($result) {
                echo "Інформацію профілю успішно оновлено!";
            } else {
                throw new Exception("Помилка при оновленні інформації профілю.");
            }
        } catch (Exception $e) {
            echo "Помилка: " . $e->getMessage();
        }
    }
    
    
    
}

