<?php

if(isset($_POST['submit'])){
    
$username =    $_POST['username'];
$password= $_POST['password'];
    
$connection = mysqli_connect('localhost', 'root', '','loginapp');
    
    if($connection){
        
        echo "We is ONLINE!";
        
    } else{
        die("Database connection error");
    } 
    
    $query = "INSERT INTO users(username,password) ";
    $query .="VALUES ('$username','$password')";
    
   $result=  mysqli_query($connection,$query);
    
    if(!$result){
        
        die('Query FAILED' . mysqli_error());
    }
        

//    
//    if($username && $password){
//        
//    echo $username."<br>";
//    echo $password;
//        
//    }if($username == null){
//        echo "no username"."<br>";
//    }
//    if($password == null){
//        echo "no passowrd";
//    }
       
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
   
    <div class="container">
        
        <div class="col-sm-6">
            
            <form action="login_create.php" method = "post">
                <div class="form-group">
                <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                
                
                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password" class="form-control">                 
                </div>
                
                <input class= "btn btn-primary"type="submit" name= "submit" value="Submit">
                
            </form>
            
        </div>
        
        
        
        
    </div> 
   
</body>
</html>