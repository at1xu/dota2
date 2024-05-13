<?php
require_once "database.php";
class Hero extends Database {

      public function __construct() { 
          parent::__construct();
      }

      public function getHeroes() {
        try {
            $sql = "SELECT * FROM heroes";
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            $heroes = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $heroes;
        } catch (PDOException $e) {
            echo "Помилка отримання списку героїв: " . $e->getMessage();
            return [];
        }
      }
      public function getById($heroId) {
        $sql = "SELECT * FROM heroes WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->execute([$heroId]);
        return $statement->fetch();
    }
    

      public function addHero($name, $img, $categoryimg, $category, $description) {
          try {
              // Додавання героя до бази даних
              $sql = "INSERT INTO heroes (name, img, categoryimg, category, description) VALUES (?, ?, ?, ?, ?)";
              $statement = $this->conn->prepare($sql);
              $statement->execute([$name, $img, $categoryimg, $category, $description]);

              return "Герой успішно доданий!";
          } catch (Exception $e) {
              return "Помилка при додаванні героя: " . $e->getMessage();
          }
      }

      public function updateHero($id, $name, $img, $categoryimg, $category, $description) {
        try {
            // Отримання поточних даних героя
            $currentHero = $this->getById($id);
    
            // Перевірка та встановлення нових значень, якщо вони передані, або використання старих значень
            $updatedName = isset($name) ? $name : $currentHero['name'];
            $updatedImg = isset($img) ? $img : $currentHero['img'];
            $updatedCategoryImg = isset($categoryimg) ? $categoryimg : $currentHero['categoryimg'];
            $updatedCategory = isset($category) ? $category : $currentHero['category'];
            $updatedDescription = isset($description) ? $description : $currentHero['description'];
    
            // Підготовка та виконання SQL-запиту на оновлення
            $sql = "UPDATE heroes SET name = ?, img = ?, categoryimg = ?, category = ?, description = ? WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute([$updatedName, $updatedImg, $updatedCategoryImg, $updatedCategory, $updatedDescription, $id]);
    
            // Перевірка успішності оновлення та повернення відповідного значення
            return $result ? true : false;
        } catch (Exception $e) {
            // Обробка помилки
            echo "Помилка: " . $e->getMessage();
            return false;
        }
    }
    
    
    
    
    
    
}

