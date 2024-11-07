<?php
session_start ();
$_SESSION ["prenom"] = ""; 
$_SESSION ["nom"] = ""  ; 
?>


</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
 <?php
 include ('navbar.php') ; 
 echo '<p> hi ' . $_SESSION['prenom'] . ' ' .$_SESSION["nom"] . ' ' . 'you are in home page </p>' ; 

 ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
</body>
</html>