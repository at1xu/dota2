<?php 
require_once "../clasess/hero.php";

session_start();

if (isset($_SESSION['hero_id'])) {
  $heroId = $_SESSION['hero_id'];
  $hero = new Hero();
  $heroInfo = $hero->getById($heroId);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Отримання даних з форми
    $heroId = $_POST['hero_id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
    // Завантаження зображення героя
    $imgTmpName = $_FILES['img']['tmp_name'];
    $categoryImgTmpName = $_FILES['categoryimg']['tmp_name'];
    
    // Шлях для збереження завантаженого зображення героя
    $imgPath = "../uploads/" . $_FILES['img']['name'];
    $categoryImgPath = "../uploads/" . $_FILES['categoryimg']['name'];
    
    // Переміщення завантаженого файлу в папку з зображеннями
    move_uploaded_file($imgTmpName, $imgPath);
    move_uploaded_file($categoryImgTmpName, $categoryImgPath);
    
    // Створення екземпляра класу Hero
    $hero = new Hero();

    try {
        // Виклик методу updateHero
        $result = $hero->updateHero($heroId, $name, $imgPath, $categoryImgPath, $category, $description);

        // Перевірка результату та відображення повідомлення
        if ($result) {
            echo "Інформацію про героя успішно оновлено!";
        } else {
            throw new Exception("Помилка при оновленні інформації про героя.");
        }
    } catch (Exception $e) {
        echo "Помилка: " . $e->getMessage();
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Update Hero</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <input type="hidden" name="hero_id" value="<?php echo $heroId; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter hero name" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" name="img" class="form-control" id="img" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="categoryimg" class="form-label">Category Image</label>
                <input type="file" name="categoryimg" class="form-control" id="categoryimg" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Enter category">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="../admin_panel.php">
                <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
            </a>
        </form>
    </div>

</body>
</html>
