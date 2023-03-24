<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
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
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<div class="login-box">

   <form action="" method="post">
   <span></span>
           <span></span><span></span><span></span>
     
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
       <h2>register now</h2>
       <div class="user-box">
      <input type="text" name="name" required placeholder="enter your name">
   </div>

      

      <div class="user-box">
      <input type="email" name="email" required placeholder="enter your email">
           </div>
           <div class="user-box">
               <input type="password" name="password" required placeholder="enter your password">
               <!-- <label >Password</label> -->
           </div>        
           <div class="user-box">
               <input type="password" name="cpassword" required placeholder="confirm your password">
           
               <!-- <label >Password</label> -->
               <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
           </div>

     
     <a> <input type="submit" name="submit" value="register now" class="btn" ></a>
      <p>already have an account? <a href="index.php">login now</a></p>
  
   </form>

   </div>

</body>
</html>