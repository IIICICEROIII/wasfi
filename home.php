<?php      
     session_start();
    
      $username =  $_POST['user'];   
      $password = $_POST['pass'];  
        //to prevent from mysqli injection  
       //$username = stripcslashes($username);  
      //$password = stripcslashes($password);  
      //$username = mysqli_real_escape_string($con, $username);  
      //$password = mysqli_real_escape_string($con, $password);  
      $host = "localhost";  
      $user = "root";  
      $pass = '';  
      $db_name = "test";  
      $con = mysqli_connect($host, $user, $pass, $db_name); 

      $conn = mysqli_connect("localhost", "root", "", "test");

      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($conn, $query);
      
      if(mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $_SESSION['user_id'] = $row['ID_U'];
              
          }
        
          // redirect the user to the upload page
         header("Location: upload1.php");
      } else {
          echo "Invalid login credentials.";
      }
      
      mysqli_close($conn);
      ?>