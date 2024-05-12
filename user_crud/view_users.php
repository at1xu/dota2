<?php
require_once "clasess/database.php"; // Include the Database class

$db = new Database();

// Отримання списку користувачів
$query = "SELECT * FROM users";
$statement = $db->getConnection()->prepare($query);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

// Перевірка, чи передано ідентифікатор користувача для видалення
if (isset($_GET['id'])) {
    // Отримання ідентифікатора користувача з запиту
    $userId = $_GET['id'];

    // Перевірка, чи ідентифікатор користувача є числом
    if (!is_numeric($userId)) {
        echo 'ID користувача має бути числом.';
        exit;
    }

    // Видалення користувача з бази даних
    $sql = "DELETE FROM users WHERE id = :id";
    $statement = $db->getConnection()->prepare($sql);
    $statement->bindParam(':id', $userId);
    $statement->execute();

    // Перенаправлення на цю ж сторінку для оновлення списку користувачів
    header("Location: admin_panel.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5 mb-4">Users</h2>
    <a href="user_crud/create_user.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-bottom: 20px;">Create User</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['login']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="user_crud/edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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
