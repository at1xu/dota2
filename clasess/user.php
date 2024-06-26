<?php
require_once "database.php";

class User extends Database {
    private $roles;

    public function __construct() { 
        parent::__construct();
        $this->roles = "user";
    }

    public function getUsers() {
        try {
            $sql = "SELECT * FROM users";
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            $heroes = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $heroes;
        } catch (PDOException $e) {
            echo "Помилка отримання списку юзерів: " . $e->getMessage();
            return [];
        }
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
            $user = $statement->fetch();//асоціативне поле юзер
            
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
        $sql = "SELECT * FROM users WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->execute([$userId]);
        return $statement->fetch();
    }
    

    
    public function updateUser($userId, $login, $email, $password, $firstName, $lastName, $image) {
        try {
            // Отримання поточних даних користувача
            $currentUser = $this->getUserById($userId);
    
            // Перевірка та встановлення нових значень, якщо вони передані, або використання старих значень
            $updatedLogin = isset($login) ? $login : $currentUser['login'];
            $updatedEmail = isset($email) ? $email : $currentUser['email'];
            $updatedPassword = isset($password) ? password_hash($password, PASSWORD_BCRYPT) : $currentUser['password'];
            $updatedFirstName = isset($firstName) ? $firstName : $currentUser['firstname'];
            $updatedLastName = isset($lastName) ? $lastName : $currentUser['lastname'];
    
            // Оновлення шляху до зображення користувача, якщо новий файл був завантажений
            if ($_FILES['photo']['size'] > 0) {
                $updatedImg = "uploads/" . $_FILES['photo']['name'];
            } else {
                $updatedImg = $currentUser['image']; // Використовуємо поточний шлях
            }
    
            // Підготовка та виконання SQL-запиту на оновлення
            $sql = "UPDATE users SET login = ?, email = ?, password = ?, firstname = ?, lastname = ?, image = ? WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute([$updatedLogin, $updatedEmail, $updatedPassword, $updatedFirstName, $updatedLastName, $updatedImg, $userId]);
    
            // Перевірка успішності оновлення та повернення відповідного значення
            return $result ? true : false;
        } catch (Exception $e) {
            // Обробка помилки
            echo "" . $e->getMessage();
            return false;
        }
    }
    
    
    
    
    
    public function create($login, $email, $password, $firstName, $lastName, $role = 'user', $image) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            // Додавання користувача до бази даних
            $sql = "INSERT INTO users (login, email, password, firstname, lastname, role, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$login, $email, $hashedPassword, $firstName, $lastName, $role, $image]);
            
            return "Користувач успішно створений!";
        } catch (Exception $e) {
            return "Помилка при створенні користувача: " . $e->getMessage();
        }
    }
    
    public function deleteUser($id)
    {
        try {
            // Підготовка SQL-запиту для видалення героя
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $this->conn->prepare($sql);

            // Прив'язка параметру :id до значення ID
            $stmt->bindParam(':id', $id);
            
            // Виконання запиту
            $stmt->execute();
            
            // Повернення true, якщо видалення пройшло успішно
            return true;
        } catch (PDOException $e) {
            // Обробка помилок, якщо вони виникли
            echo "Помилка видалення героя: " . $e->getMessage();
            return false;
        }
    }

  
    
    
}

