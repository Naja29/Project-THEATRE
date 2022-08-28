<?php
    require_once('connection/db.php');
    session_start();
?>
<?php
    if(isset($_POST['sign_in']))
    {
      $username=$_POST['username'];
      $password=$_POST['password'];

      $query="select A_ID from admin where Username='$username' && Password='$password'";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count = mysqli_fetch_array($result);
       if($count >0){ 
          echo 
            "<script>
                alert('Login successfully');
                window.location.href='dashboard.php';
            </script>";
         }
        else{
            echo 
            "<script>
                alert('Login Credentials do not match');
                window.location.href='index.php';
            </script>";
        }
    }
    
?>