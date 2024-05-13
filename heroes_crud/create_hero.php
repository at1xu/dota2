<?php
require_once "../clasess/hero.php"; // Підключення класу Hero

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних з форми
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $attack_type = $_POST['attack_type']; // Додано

    // Отримання ім'я файлів
    $imgName = $_FILES['img']['name'];
    $categoryImgName = $_FILES['categoryimg']['name'];
    $detailImageName = $_FILES['detail_image']['name'];

   // Отримання шляхів до тимчасових файлів
    $imgTmp = $_FILES['img']['tmp_name'];
    $categoryImgTmp = $_FILES['categoryimg']['tmp_name'];
    $detailImageTmp = $_FILES['detail_image']['tmp_name'];

    // 'name' містить ім'я файлу, як воно було названо на клієнтському комп'ютері, 
    // 'tmp_name' містить тимчасовий шлях до цього файлу на сервері, 
    // який використовується для обробки та переміщення файлу на постійне місце.
    
    // Збереження файлів на сервері
    $imgPath = 'uploads/' . $imgName;
    $categoryImgPath = 'uploads/' . $categoryImgName;
    $detailImagePath = 'uploads/' . $detailImageName;
    //це для збереження зображеннь в папку uploads
    $imgPathTmp = '../uploads/' . $imgName;
    $categoryImgPathTmp = '../uploads/' . $categoryImgName;
    $detailImagePathTmp = '../uploads/' . $detailImageName;

    move_uploaded_file($imgTmp, $imgPathTmp);
    move_uploaded_file($categoryImgTmp, $categoryImgPathTmp);
    move_uploaded_file($detailImageTmp, $detailImagePathTmp);

    $hero = new Hero();
    $result = $hero->addHero($name, $imgPath, $categoryImgPath, $category, $description, $detailImagePath, $attack_type);
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
            <div class="mb-3">
                    <label for="detail_image" class="form-label">Detail Image</label>
                    <input type="file" name="detail_image" class="form-control" id="detail_image" accept="image/*" required>
            </div>

            <div class="mb-3"> 
                <label for="attack_type" class="form-label">Attack Type</label>
                <input type="text" name="attack_type" class="form-control" id="attack_type" placeholder="Enter attack type">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="../admin_panel.php">
                <button type="button" name="submit" class="btn btn-danger">Cancel</button>
            </a>
        </form>
    </div>
</body>
</html>
