<?php      
    include('config.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        
      
        $sql = "select id from admindb where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location: welcome.html");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  