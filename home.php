<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>"पुस्तकानि पठतः शास्त्राणि ज्ञानं प्राप्नोति सर्वदा।" </h3>
      <p>पुस्तक पढ्ने आदतले हाम्रो विचारशीलता र बुझाइलाई बढाउँछ र हामीले धेरै विभिन्न स्थानहरू, समयहरू, र परिस्थितिहरूमा बसेका चरित्रहरूलाई जान्ने अवसर प्रदान गरेको छ| पुस्तकहरूले हाम्रो भाषा र लेखन कौशलमा पनि सुधार हुन्छ र हामीले व्यक्तिगत र पेशेवर जीवनमा उपयोगी हुन्छ।</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">NRs<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>About us/"हाम्रो बारेमा"</h3>
         <p>
"Mero Book" is a Nepal-based website designed and operated for the "National Book Library, Nepal." The primary objective of the website is to make books more accessible to a wider audience by offering them at affordable prices. The platform is committed to promoting digital literacy in Nepal, aiming to bridge the gap between people and knowledge through cost-effective book distribution. Spearheaded by Prakash Raj Nepal, the website is not only a bookstore but a catalyst for enhancing the country's digital literacy rate, contributing to the cultural and educational development of Nepal.</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?(जानकारीको लागि)</h3> 
      <p>If you need to contact us regarding buy/sell of the book or any thing else. Please visit our Social media or you can direct call us.
         <br> "यदि तपाईंले पुस्तकको खरीद/बिक्रीसँग सम्बन्धित हामीसँग सम्पर्क गर्न चाहानुहुन्छ वा कुनै अन्य कुरा छ भने कृपया हाम्रो सोशल मिडिया भ्रमण गर्नुहोस् वा तपाईंले सीधा हामीलाई फोन गर्न सक्नुहुनेछ।"</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>