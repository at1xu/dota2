
<?php
include './components/header.php';
require_once "clasess/user.php";

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
        echo "";
    } else {
        echo "";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/userpage.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

</head>

<body>

<div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://c4.wallpaperflare.com/wallpaper/825/375/685/dota-2-wallpaper-preview.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hello <?php echo $userInfo['login']; ?></h1>
                   
                    <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>  
                

                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit profile</button>

                    <?php
                        if ($user->isAdmin()) {
                            echo '<a href="admin_panel.php"  >
                                        <button type="submit" class="btn btn-warning">Admin panel</button>
                                  </a>';
                        }
                    ?>
                    <form action="logout.php" method="post" style="display: inline;">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
           
                  </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="col">
            <div class="row-xl-6">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0" style="color:#172b4d;">My account</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                            <div class="row">
                                  <?php if(isset($userInfo) && !empty($userInfo)): ?>
                                    <div class="mb-3 text-center">
                                        <label class="form-label">Profile Picture</label>
                                        <div id="profile" class="bg-light rounded-circle mx-auto mb-3" style="width: 150px; height: 150px; background-size: cover; background-position: center; background-image: url('<?php echo $userInfo['image']; ?>');">
                                            
                                        </div>
                                        <input type="file" name="profile_pic" id="editProfilePic" style="display: none;">
                                    </div>
                                      <div class="col-lg-6">
                                          <div class="form-group focused">
                                              <label class="form-control-label" for="input-username">Username</label>
                                              <input type="text" name="login" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $userInfo['login']; ?>" readonly>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label class="form-control-label" for="input-email">Email address</label>
                                              <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo $userInfo['email']; ?>" readonly>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group focused">
                                              <label class="form-control-label" for="input-first-name">First name</label>
                                              <input type="text" name="firstName" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $userInfo['firstname']; ?>"readonly>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group focused">
                                              <label class="form-control-label" for="input-last-name">Last name</label>
                                              <input type="text" name="lastName" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $userInfo['lastname']; ?>"readonly>
                                          </div>
                                      </div>
                                  <?php endif; ?>
                              </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:#172b4d">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Форма для редагування профілю -->
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="photo" id="photo" accept="image/*" onchange="previewImage(event)">
                        <label for="photo" id="file-label">Select an image</label>
                        <img id="image-preview" src="#" style="width:100%;">
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
</div>


<?php include './components/footer.php'; ?>
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
