<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $id = mysqli_real_escape_string($conn, $_POST['id']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
	

   $select = " SELECT * FROM user_form WHERE id = '$id' && email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{
         $insert = "INSERT INTO user_form(username, email, id, phone, user_type) VALUES('$username','$email','$id','$phone','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Admin Registration</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="id" required placeholder="enter your id">
      <input type="text" name="phone" required placeholder="enter your phone number">
	   <select name="user_type">
         <option value="admin">admin</option>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>