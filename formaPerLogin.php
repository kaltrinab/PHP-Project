
<?php
try{
      echo("Te dhenat u procesuan me sukses ");
       
}
catch (customException $e) {
    echo $e->errorMessage();
  }
?>
