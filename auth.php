<?php
require_once "clasess/user.php";

$user = new User();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $user->register($_POST["txt"], $_POST["email"], $_POST["pswd"]);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $user->login($_POST["email"], $_POST["pswd"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
  <link rel="stylesheet" href="style/auth.css">

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="txt" placeholder="User name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="pswd" placeholder="Password" required="">
        <button type="submit" name="register">Sign up</button>
    </form>
		</div>

		<div class="login">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<label for="chk" aria-hidden="true">Login</label>
						<input type="email" name="email" placeholder="Email" required="">
						<input type="password" name="pswd" placeholder="Password" required="">
						<button type="submit" name="login">Login</button>
				</form>
		</div>

	</div>

</body>
</html>