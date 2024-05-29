<?php 
require_once "../clasess/hero.php";


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $heroId = $_GET['id'];
    $hero = new Hero();
    $heroInfo = $hero->getById($heroId);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Отримання даних з форми
    $heroId = $_POST['hero_id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $attackType = $_POST['attack_type']; 
    
    // Завантаження зображення героя
    $imgTmpName = $_FILES['img']['tmp_name'];
    $categoryImgTmpName = $_FILES['categoryimg']['tmp_name'];
    $detailImageTmpName = $_FILES['detail_image']['tmp_name'];
    
    // Шлях для збереження завантаженого зображення героя
    $imgPath = "uploads/" . $_FILES['img']['name'];
    $categoryImgPath = "uploads/" . $_FILES['categoryimg']['name'];
    $detailImagePath = "uploads/" . $_FILES['detail_image']['name'];

    //шлях для збереження зораження в папку
    $imgPathTmp = "../uploads/" . $_FILES['img']['name'];
    $categoryImgPathTmp = "../uploads/" . $_FILES['categoryimg']['name'];
    $detailImagePathTmp = "../uploads/" . $_FILES['detail_image']['name'];
    // Переміщення завантаженого файлу в папку з зображеннями
    move_uploaded_file($imgTmpName, $imgPathTmp);
    move_uploaded_file($categoryImgTmpName, $categoryImgPathTmp);
    move_uploaded_file($detailImageTmpName, $detailImagePathTmp);
    
    // Створення екземпляра класу Hero
    $hero = new Hero();

    try {
        // Виклик методу updateHero
        $result = $hero->updateHero($heroId, $name, $imgPath, $categoryImgPath, $category, $description, $attackType,$detailImagePath);

        // Перевірка результату та відображення повідомлення
        if ($result) {
            echo "Інформацію про героя успішно оновлено!";
        } else {
            throw new Exception("Помилка при оновленні інформації про героя.");
        }
    } catch (Exception $e) {
        echo "Помилка: " . $e->getMessage();
    }
    header("Location: ../admin_panel.php");
    exit();
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
                <input value="<?php echo $heroInfo['name']; ?>" type="text" name="name" class="form-control" id="name" placeholder="Enter hero name" required>
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
                <input type="text" value="<?php echo $heroInfo['category']; ?>"  name="category" class="form-control" id="category" placeholder="Enter category">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control"  id="description" placeholder="Enter description"><?php echo $heroInfo['description']; ?></textarea>
            </div>
            <div class="mb-3"> 
                <label for="attack_type" class="form-label">Attack Type</label>
                <input type="text" name="attack_type" value="<?php echo $heroInfo['attack_type']; ?>" class="form-control" id="attack_type" placeholder="Enter attack type">
            </div>
            <div class="mb-3">
                <label for="detail_image" class="form-label">Detail Image</label>
                <input type="file" name="detail_image" class="form-control" id="detail_image" accept="image/*">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="../admin_panel.php">
                <button type="button" name="cancel" class="btn btn-danger">Cancel</button>
            </a>
        </form>
    </div>

</body>
</html>
