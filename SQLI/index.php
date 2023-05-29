<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/dd7bd0897d.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name">

        <!-- <label>Password</label><span id="togglePassword" onclick="togglePasswordVisibility()">&#128065;</span>
        <span>
            <input type="password" name="password" id="pass" placeholder="Password">
        </span> -->
        <label>Password</label>
        <span id="togglePassword" onclick="togglePasswordVisibility()">
            <i class="fas fa-eye" id="eyeIcon"></i>
        </span>
        <div class="password-input-container">
            <input type="password" id="passwordInput" name="password" placeholder="Password">
        </div>
        <button type="submit" name="login">LOGIN</button>
    </form>
</body>
</html>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("passwordInput");
        var toggleIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }

</script>