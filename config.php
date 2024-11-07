<?php




$emailError = "";
$passwordError = ""; 
if (isset($_POST ["submit"])) {

    $EmailValue =$_POST ["Email"] ; 
    $passwordValue = $_POST ["password"] ; 


     if  (empty ($emailValue) || empty ($passwordValue)) {

    $emailError=  'email must be filled out' ; 
}

elseif (preg_match ("/\w+(@emsi.ma)${1}/" , $emailValue)){
        echo "please enter a valid email" ; 
    }
    elseif  (empty($passwordValue)) {
       $passwordError =  'password must be filled out' ; 
    } 
    
    
    else {header('location:login.php') ;
    
}
}
?>
