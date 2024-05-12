<?php
require_once "../clasess/hero.php"; // Підключення класу Hero

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Отримання ім'я файлів та шляхів до тимчасових файлів
    $imgName = $_FILES['img']['name'];
    $imgTmp = $_FILES['img']['tmp_name'];
    $categoryImgName = $_FILES['categoryimg']['name'];
    $categoryImgTmp = $_FILES['categoryimg']['tmp_name'];

  

    // Збереження файлів на сервері
    $imgPath ='uploads/' . $imgName;
    $categoryImgPath = 'uploads/' . $categoryImgName;
    $hero = new Hero();
    $result = $hero->addHero($name, $imgPath, $categoryImgPath, $category, $description);
    echo $result;
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
        <h2 class="mt-5 mb-4">Create Hero</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter hero name" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" name="img" class="form-control" id="img" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="categoryimg" class="form-label">Category Image</label>
                <input type="file" name="categoryimg" class="form-control" id="categoryimg" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Enter category" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Enter description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="../admin_panel.php">
                <button type="button" name="submit" class="btn btn-danger">cancel</button>
            </a>
        </form>
    </div>
</body>
</html>
