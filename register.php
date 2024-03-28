<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!/प्रयोगकर्ता पहिले नै छ';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!/पासवर्ड मिलेन';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Registered Successfully!सफलतापूर्वक दर्ता गरिएको!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now <br> (दर्ता गर्नुहोस्) </h3>
      <input type="text" name="name" placeholder="Enter Your Name/तपाईंको नाम लेख्नुहोस्" required class="box">
      <input type="email" name="email" placeholder="Enter Your Email/तपाईंको इमेल लेख्नुहोस्" required class="box">
      <input type="password" name="password" placeholder="Enter Your Password/तपाईंको पासवर्ड लेख्नुहोस्" required class="box">
      <input type="password" name="cpassword" placeholder="Confirm Your Password/तपाईंको पुनः पासवर्ड लेख्नुहोस्" required class="box">
      <select name="user_type" class="box">
         <option value="user">User/प्रयोगकर्ता</option>
         <option value="admin">Admin/प्रशासक</option>
      </select>
      <input type="submit" name="submit" value="Register Now/दर्ता गर्नुहोस्" class="btn">
      <p>Already Have An Account?पहिले नै खाता छ?  <a href="login.php">Login-Now/लगइन गर्नुहोस् </a></p>
   </form>

</div>

</body>
</html>