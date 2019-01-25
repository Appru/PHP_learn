<?php

if(isset($_POST['submit'])){
    
$username = $_POST['username'];
$password = $_POST['password'];
    
//echo $username. "<br>";
//echo $password;
    
    if(strlen($username)< 5){
        
        echo " too short ,pal";
        
    }

}
    
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
   <form action="form.php" method= "post">
       
       <input type="text" name = "username" placeholder = "Enter username" >
       
       <input type="password" name = "password" placeholder="Enter password" >
       
       <br>
       <input type= "submit" name="submit">
       
   </form>
    
</body>
</html>