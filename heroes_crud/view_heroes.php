<?php
require_once "clasess/hero.php"; 



$hh = new Hero();
$heroes = $hh->getHeroes();

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Отримання ID героя для видалення
    $result = $hh->deleteHero($id); // Виклик функції видалення героя за ID

    // Перевірка результату видалення
    if ($result) {
        echo "Героя було успішно видалено!";
    } else {
        echo "Не вдалося видалити героя.";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5 mb-4">Heroes</h2>
    <a href="heroes_crud/create_hero.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-bottom: 20px;">Create User</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heroes as $hero): ?>
                <tr>
                    <td><?php echo $hero['id']; ?></td>
                    <td><?php echo $hero['name']; ?></td>
                    <td><?php echo $hero['category']; ?></td>
                    <td>
                        <a href="heroes_crud/edit_hero.php?id=<?php echo $hero['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?id=<?php echo $hero['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
