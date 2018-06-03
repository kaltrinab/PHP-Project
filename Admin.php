<!DOCTYPE html>
<html>
<head>
  <title></title>

<?php
ob_start();
session_start();
require_once('db.php');

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    if($username == "impulse" && $password == "impulse123")

{
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header('Location: all-rooms.php');
    }
    else{
        $error = "Wrong Username or Password";
    }
}


?>

<style type="text/css">
   
  
        * {
            font-family: 'Trebuchet ms'
        }

#inputEmail,#inputPassword{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    margin: 5px;
}


                      .button {
                      background-color: #088A4B; /* Green */
                      border: none;
                      color: white;
                      padding: 15px 32px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;
                      cursor: pointer;
                      -webkit-transition-duration: 0.4s; /* Safari */
                      transition-duration: 0.4s;
                      width: 50%;
  }

  label{

    text-align: center;
    color: red;
    display: block;
  }

</style>

</head>
<body>


<div class="header">
<?php include 'DB\header.php';?>
</div>

   
          <div align="center">
              <form  action="" method="post">
                <h2>Admin Login</h2>
                <br>
                <input type="text" id="inputEmail" name="username"  placeholder="Username" required autofocus>
                <br>
                <br>
                <input type="password" id="inputPassword" name="password" placeholder="Password" required>
                  
                <input type="submit" name="submit" value="Sign In" class="button">
                <div>
                <label>
                    <?php
                      if(isset($error)){
                          echo "$error";
                      }
                      ?>
                  </label>
              </div>
              </form>
            </div>


<?php require("DB/footer.php") ?>

  </body>
</html>
