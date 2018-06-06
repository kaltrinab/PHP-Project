<!DOCTYPE html>
<html>
<head><title>Admin</title>

<?php
ob_start();
session_start();
require_once('db.php');

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if($username == "impulse" && $password == "impulse123")
    {
        setcookie('username',$username, time()+60);
        setcookie('password',$password, time()+60);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header('Location: all-rooms.php');
    }
    else
    {
        $error = "Wrong Username or Password";
    }
}


?>

<style type="text/css">
     * 
      {
       font-family: 'Trebuchet ms';
      }


#inputEmail,#inputPassword
{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 5px;
}


.button
{
    margin: 20px;
    background-color: #088A4B;
    color: white;
    padding: 20px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 50%;
}
  
label
{
    text-align: center;
    color: red;
    
}
  #myBtn
{
    display: none;
    position: fixed;
    z-index: 99;
    height: 25px;
    width: 25px;
    cursor: pointer;
    background: URL('Foto/TopPage.png') no-repeat;
    background-size: 25px,25px;
    bottom: 5%;
    right: 2%;
    transform: scale(2,2);
}
  #myBtn:hover 
{
    opacity: 0.8;
}
/*Div element per homeButton*/
#homeButton 
{
    position: fixed;
    bottom: 3%;
    left: 1%;
    z-index: 2;
  }
#homeButton:hover
{
    opacity: 0.8;
}

div{
  overflow: hidden;
}

</style>
</head>

<body>

      <div class="header">
      <?php include 'DB\header.php';?>
      </div>

   
  <div align="center">
      <form   method="post">
         <h1>Admin Login</h1>
         <br>
         <input type="text" id="inputEmail" name="username"  placeholder="Username" required autofocus>
         <br><br>
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