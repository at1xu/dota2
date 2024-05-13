<?php
require_once "clasess/hero.php"; 
require_once "clasess/database.php"; 

$hh = new Hero();
$heroes = $hh->getHeroes();

$db = new Database();


if (isset($_GET['id'])) {
    // Get the user ID from the request
    $Id = $_GET['id'];

    // Check if the user ID is numeric
    if (!is_numeric($Id)) {
        echo 'ID користувача має бути числом.';
        exit;
    }

    // Delete the user from the database
    $sql = "DELETE FROM heroes WHERE id = :id";
    $statement = $db->getConnection()->prepare($sql);
    $statement->bindParam(':id', $Id);
    $statement->execute();

    // Redirect to the same page to update the list of users
    header("Location: admin_panel.php");
    exit();
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
