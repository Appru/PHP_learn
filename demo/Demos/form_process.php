<?php

if(isset($_POST['submit'])){
    
    $min = 5;
    $max = 10;
    
$username = $_POST['username'];
$password = $_POST['password'];
    
//echo $username. "<br>";
//echo $password;
    
    if(strlen($username)< 5){
        
        echo " too short ,pal";
        
    }

}
    
?>