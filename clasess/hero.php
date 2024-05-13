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
    
    public function addHero($name, $img, $categoryimg, $category, $description, $detail_image, $attack_type) {
        try {
            // Додавання героя до бази даних
            $sql = "INSERT INTO heroes (name, img, categoryimg, category, description, detail_image, attack_type) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$name, $img, $categoryimg, $category, $description, $detail_image, $attack_type]);
    
            return "Герой успішно доданий!";
        } catch (Exception $e) {
            return "Помилка при додаванні героя: " . $e->getMessage();
        }
    }
    
    public function updateHero($id, $name, $img, $categoryimg, $category, $description, $attackType, $detailImage) {
        try {
            // Отримання поточних даних героя
            $currentHero = $this->getById($id);
    
            // Перевірка та встановлення нових значень, якщо вони передані, або використання старих значень
            $updatedName = isset($name) ? $name : $currentHero['name'];
            
            // Оновлення шляху до зображення героя, якщо новий файл був завантажений
            if ($_FILES['img']['size'] > 0) {
                $updatedImg = "uploads/" . $_FILES['img']['name'];
            } else {
                $updatedImg = $currentHero['img']; // Використовуємо поточний шлях
            }
            
            // Аналогічно для іншого зображення
            if ($_FILES['categoryimg']['size'] > 0) {
                $updatedCategoryImg = "uploads/" . $_FILES['categoryimg']['name'];
            } else {
                $updatedCategoryImg = $currentHero['categoryimg']; // Використовуємо поточний шлях
            }
    
            $updatedCategory = isset($category) ? $category : $currentHero['category'];
            $updatedDescription = isset($description) ? $description : $currentHero['description'];
            $updatedAttackType = isset($attackType) ? $attackType : $currentHero['attack_type'];
            
            // Оновлення шляху до зображення деталей героя, якщо новий файл був завантажений
            if ($_FILES['detail_image']['size'] > 0) {
                $updatedDetailImage = "uploads/" . $_FILES['detail_image']['name'];
            } else {
                $updatedDetailImage = $currentHero['detail_image']; // Використовуємо поточний шлях
            }
    
            // Підготовка та виконання SQL-запиту на оновлення
            $sql = "UPDATE heroes SET name = ?, img = ?, categoryimg = ?, category = ?, description = ?, attack_type = ?, detail_image = ? WHERE id = ?";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute([$updatedName, $updatedImg, $updatedCategoryImg, $updatedCategory, $updatedDescription, $updatedAttackType, $updatedDetailImage, $id]);
    
            // Перевірка успішності оновлення та повернення відповідного значення
            return $result ? true : false;
        } catch (Exception $e) {
            // Обробка помилки
            echo "Помилка: " . $e->getMessage();
            return false;
        }
    }
    public function deleteHero($id)
    {
        try {
            // Підготовка SQL-запиту для видалення героя
            $sql = "DELETE FROM heroes WHERE id = :id";
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

