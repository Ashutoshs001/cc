<?php      
    include('connect.php');  
    if(isset($_POST['submit']))
{
    $username = $_POST['uname'];  
    $password = $_POST['psw']; 
      
        //to prevent from mysqli injection  
        // $username = stripcslashes($username);  
        // $password = stripcslashes($password);  
        // $username = mysqli_real_escape_string($conn, $username);  
        // $password = mysqli_real_escape_string($conn, $password);  
      
        $sql="INSERT INTO shop (username,password) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC)  
        // $count = mysqli_num_rows($result);  


        echo"<script>alert('Registration Successful')
            window.location.href = 'login.html'
        </script>";
          
}    
?>