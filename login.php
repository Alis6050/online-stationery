
<!DOCTYPE html>
<?php
include('login/dblogin.php');
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="reg.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
  <div class="wrapper">
    <form action="login.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" name="login" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="reg.html">Register</a></p>
      </div>
    </form>
    <?php
                                    if(isset($_POST['login'])){
                                        session_start();
                                        $username=$_POST['username'];
                                        $password=$_POST['password'];
                                        echo 'alert(Invalid Email or Password)';

                                        $select = mysqli_query($conn,"select * from registration where username ='$username' and password ='$password'");
                                        $row = mysqli_fetch_array($select);

                                        if(is_array($row)){
                                            $_SESSION['username'] = $row['username'];
                                            $_SESSION['password'] = $row['password'];
                                        }  else{
                                            echo '<script type="text/javascript">';
                                            echo 'alert(Invalid Email or Password)';
                                            echo 'window.location.href="intex.php"';
                                            echo '</script>';
                                        }
                                        if(isset($_SESSION["username"])){
                                          header("Location:intex.php");
                                      }
                                    
                                      }
                                    
                                    ?>
  </div>
</body>
</html>