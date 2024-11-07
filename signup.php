<?php
include("config.php") ; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php include("navbar.php"); ?>

<form action="login.php" method="post">
    <div class="form-group">
        <label for="exampleInputLastname1">Lastname</label>
        <input name="Lastname" type="text" class="form-control" id="exampleInputLastname1" placeholder="Lastname">
    </div>
    <div class="form-group">
        <label for="exampleInputFirstname">Firstname</label>
        <input name="Firstname" type="text" class="form-control" id="exampleInputFirstname" placeholder="Firstname">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="Email" type="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        <span style='color:red'> <?php echo $emailError ?> </span>
    </div>
    <div class="form-group"> 
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <span style='color:red'> <?php echo $passwordError ?> </span>
    </div>
    <div class="form-group">
        <label for="exampleInputConfirmPassword1">Confirm Password</label>
        <input name="confirmpassword" type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> 
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
