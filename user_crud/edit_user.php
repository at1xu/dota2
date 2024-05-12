<?php

require_once "../clasess/user.php";
include '../components/header.php';
$user = new User();

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $userInfo = $user->getUserById($userId);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Отримання введених даних з форми
    $login = $_POST['login'];
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    // Отримання зображення профілю
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoPath = 'uploads/' . $photoName;

    // Отримання поточної інформації про користувача
    $currentUserInfo = $user->getUserById($_SESSION['user_id']);
    $currentLogin = $currentUserInfo['login'];
    $currentEmail = $currentUserInfo['email'];

    // Перевірка чи відбулися зміни у полях логіну та email
    if ($login !== $currentLogin || $email !== $currentEmail) {
        // Якщо відбулися зміни, викликаємо updateUser() з новим логіном та email
        $user->updateUser($_SESSION['user_id'], $login, $email, null, $firstName, $lastName, $photoPath);
    } else {
        // Якщо не відбулися зміни, викликаємо updateUser() без зміни пароля
        $user->updateUser($_SESSION['user_id'], $currentLogin, $currentEmail, null, $firstName, $lastName, $photoPath);
    }

    // Перевірка та переміщення зображення профілю
    if (move_uploaded_file($photoTmpName, $photoPath)) {
        echo "Інформацію профілю успішно оновлено!";
    } else {
        echo "Помилка при завантаженні зображення.";
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
    <title>Edit User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Edit User</h2>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for editing user profile -->
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="photo" id="photo" class="form-control" accept="image/*" onchange="previewImage(event)">
                        <label for="photo" id="file-label" class="form-label">Select an image</label>
                        <img id="image-preview" src="#" style="width: 40%;" class="mt-2">
                    </div>
                    <div class="mb-3">
                        <label for="editUsername" class="form-label">Username</label>
                        <input type="text" name="login" class="form-control" id="editUsername" placeholder="Enter username" value="<?php echo $userInfo['login']; ?>">
                    </div>  
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="editEmail" placeholder="Enter email" value="<?php echo $userInfo['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editFirstName" class="form-label">First name</label>
                        <input type="text" name="firstname" class="form-control" id="editFirstName" placeholder="Enter first name" value="<?php echo $userInfo['firstname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editLastName" class="form-label">Last name</label>
                        <input type="text" name="lastname" class="form-control" id="editLastName" placeholder="Enter last name" value="<?php echo $userInfo['lastname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="editPassword" placeholder="Password">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewImage(event) {
            const preview = document.getElementById('image-preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
