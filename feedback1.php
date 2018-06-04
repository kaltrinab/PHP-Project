<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style type="text/css">
  
        * {
            font-family: 'Trebuchet ms'
        }


#name,#phone,#email, select, textarea {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    margin: 15px;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

#submit {
    margin: 20px;
    background-color: #088A4B;
    color: white;
    padding: 20px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 70%;
}

#submit:hover {
    background-color: #45a049;
}
#myBtn {
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

            #myBtn:hover {
                opacity: 0.8;
            }

        /*Div element per homeButton*/
        #homeButton {
            position: fixed;
            bottom: 3%;
            left: 1%;
            z-index: 2;
        }

            #homeButton:hover {
                opacity: 0.8;
            }


</style>
</head>
<body>


<?php include 'DB/header.php';?>

<center><h1>Give Feedback</h1></center>
<?php
    require_once('db.php');
    $error = "";
    $color = "red";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $q = "SELECT * FROM feedback ORDER BY feedback.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }


        if(empty($name) or empty($email) or empty($phone) or empty($message)){
            $error = "All Feilds Required, Try Again";

        }
        else{
            $insert_query = "INSERT INTO `feedback`(`id`, `name`, `email`, `phone`, `message`) VALUES ('$id','$name','$email','$phone','$message')";
            if(mysqli_query($con, $insert_query)){
                $error = "We've got your feedback.<br>THANK YOU!<br>";
                $color = "green";
            }
            else{
                $error = "Error occured";
            }
        }
    }

?>



            <div align="center">        
           
            <label style="color: <?php echo $color; ?>">
                <?php
                    echo $error;
                ?>
            </label>
            <form  method="post">
                <div >  
                <input type="text"  name="name" id="name" placeholder="Name">
                </div>
                <div >
                <input type="email"  name="email" id="email" placeholder="Enter email">
                </div>
                <div >
                <input type="phone"  name="phone" id="phone" placeholder="Phone">
                </div>
                <div >
                <textarea type="email"  name="message" placeholder="Message" rows="4"></textarea>
                </div>  
                <input type="submit" class="btn btn-primary" value="Send" id="submit" name="submit">
            </form>
            </div>
<!-- form -->


<?php include 'DB/footer.php';?>

</body></html>