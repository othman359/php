<?php
include("config.php");

if (isset($_POST["submit"])) {
    $emailError = $passwordError = "";
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if (empty($email)) {
        $emailError = "Email is required!";
    }
    if (empty($password)) {
        $passwordError = "Password is required!";
    }
    
    if (empty($emailError) && empty($passwordError)) {
        // Handle login logic (authenticate against DB, etc.)
        // Example: echo "Logged in successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include("navbar.php"); ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4">
            <!-- Header with Bootstrap utilities -->
            <h2 class="text-center mb-4 text-primary">Login to Your Account</h2>
            
            <form action="login.php" method="POST">
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                    <span style='color:red'><?php echo $emailError; ?></span>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    <span style='color:red'><?php echo $passwordError; ?></span>
                </div>
                <div class="form-group form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button name="submit" type="submit" class="btn btn-success btn-block w-100">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
