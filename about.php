<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us (हाम्रो बारेमा)</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3> Why Us?(हामी नै किन?)</h3>
         <p>
"मेरो Book" is a Nepal-based website designed and operated for the "National Book Library, Nepal." The primary objective of the website is to make books more accessible to a wider audience by offering them at affordable prices. The platform is committed to promoting digital literacy in Nepal, aiming to bridge the gap between people and knowledge through cost-effective book distribution. Spearheaded by Prakash Raj Nepal, the website is not only a bookstore but a catalyst for enhancing the country's digital literacy rate, contributing to the cultural and educational development of Nepal. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews (ग्राहकको प्रतिक्रिया)</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>I cant belive the website is that much good. All the features and the easily understandable native language. As well as the delivery system of the website is also remarkable . With in a 2 days i am able to recieve the book that i ordered .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ravi Tiwari</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>हाम्रो गौरवशाली संगठन अखिल (क्रान्तिकारी) देशको भौगोलिक अखण्डता, सार्वभौमिकता र आत्मस्वाभिमानका लागी आवश्यक सबै संघर्षहरुमा निरन्तर सहभागी छ र यो Website लाई समर्थन छ ।. <br><h1><b>जय क्रान्तिकारी</h1></b></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>क.सौगात पराजुली</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Extremly proud of the boy and his work for the development of this site. seeing the accuracy and the smoothness of the website i like to thanks the developer and the management team for creating this product.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Er.Sulav Adhikari</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>yeti ko website chai hunu paryo lw . yo vand aajai ramro banaudai janu.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>jhon cena</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>ramro dherai ramro aati nai ramro xa lw</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>hero no1</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>J garxu desh mai garxu natra bidesh janxu</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>apple</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Popular Authors (लोकप्रिय लेखकहरू)</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/aut-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Buddhi Sagar</h3>
      </div>

      <div class="box">
         <img src="images/aut-2.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>BP Koirala</h3>
      </div>

      <div class="box">
         <img src="images/aut-3.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amar Neupane</h3>
      </div>

      <div class="box">
         <img src="images/aut-4.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Paulo Coelho</h3>
      </div>

      <div class="box">
         <img src="images/aut-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/aut-6.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Salman Rushdie</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>