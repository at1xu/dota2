<?php

require_once "../clasess/user.php"; // Підключення класу User

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних форми
    $login = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $role = $_POST['role'];
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoPath = 'uploads/' . $photoName;
    
    $photoPathTmp='../uploads/' . $photoName;


    // Створення екземпляра класу користувача
    $user = new User();

    try {
        // Перевірка, чи було вибрано зображення для завантаження
        if (empty($photoTmpName)) {
            throw new Exception("Помилка: Зображення не було вибрано для завантаження.");
        }

        // Створення директорії uploads, якщо вона не існує
        

        // Завантаження файлу на сервер
        if (move_uploaded_file($photoTmpName, $photoPathTmp)) {
            echo "";
        } else {
            echo "Помилка при завантаженні зображення.";
        }

        // Виклик функції create для створення нового користувача
        $result = $user->create($login, $email, $password, $firstName, $lastName, $role, $photoPath);
        header("Location: ../admin_panel.php");
        exit();
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
    <title>Create User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Create User</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*" onchange="previewImage(event)">
                <label for="photo" id="file-label" class="form-label">Select an image</label>
                <img id="image-preview" src="#" style="width: 40%;" class="mt-2">
            </div>
            <div class="mb-3">
                <label for="editUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="editUsername" placeholder="Enter username" value="">
            </div>  
            <div class="mb-3">
                <label for="editEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="editEmail" placeholder="Enter email" value="">
            </div>
            <div class="mb-3">
                <label for="editFirstName" class="form-label">First name</label>
                <input type="text" name="firstname" class="form-control" id="editFirstName" placeholder="Enter first name" value="">
            </div>
            <div class="mb-3">
                <label for="editLastName" class="form-label">Last name</label>
                <input type="text" name="lastname" class="form-control" id="editLastName" placeholder="Enter last name" value="">
            </div>
            <div class="mb-3">
                <label for="editPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="editPassword" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="../admin_panel.php">
                <button type="button" name="submit" class="btn btn-danger">cancel</button>
            </a>

        </form>
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
