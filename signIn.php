<?php
   
     include("conn.php");

     if(isset($_POST['submit']))
     {
        $email1 = $_POST['email'];
        $passw= $_POST['password'];

        $insert = "insert into tbl_login values('','$email1','$passw')";

        if($conn->query($insert) === TRUE)
        {

            echo "<script>
            alert('Login Successful!');
            window.location.href = 'index.html';
          </script>";
           exit();

        //    echo "Login Successful"
        }

        else
        {
            echo "login Failed!!";
        }
     }

?>