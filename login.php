<?php      
    include('connect.php');  
    $username = $_POST['uname'];  
    $password = $_POST['psw']; 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from shop where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: index.html");
        }  
        else{  
            echo '<script type="text/JavaScript"> alert("Login failed. Incorrect password or username"); </script>';
        }
?>