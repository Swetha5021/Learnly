<?php
include 'components/connect.php';
if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>

<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>Why to choose us?</h3>
         <p>Education should be accessible to everyone, regardless of their circumstances. With our platform, you have the flexibility to learn at your own pace and on your own schedule.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>
   </div>
   <div class="box-container">
      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+2k</h3>
            <span>online courses</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+50k</h3>
            <span>Satisfied Students</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+6k</h3>
            <span>Expert Tutors</span>
         </div>
      </div>
      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Job Placement</span>
         </div>
      </div>

   </div>
</section>

<section class="reviews">
   <h1 class="heading">student's reviews</h1>
   <div class="box-container">
      <div class="box">
         <p>"I can't thank Learnly enough for the amazing learning experience it has provided. The courses are well-structured.Its Highly recommended!"</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>swetha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="box">
         <p>"As a working professional, The flexibility to learn at my own pace and access courses anytime, anywhere has made all the difference."</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>sruthi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="box">
         <p>"The diverse course selection allowed me to explore new subjects, and I found the instructors to be knowledgeable and easily approachable."</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>priyanka</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="box">
         <p>"Being a homeschooler, finding the right educational resources can be challenging.The collaborative opportunities have made it more enjoyable."</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>uma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I stumbled upon Learnly while searching for resources to improve my coding skills. I was blown away by resources they offered with such quality.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>yuthika</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
      <div class="box">
         <p>"Choosing Learnly was a no-brainer for me. The platform's user-friendly interface have been a lifesaver, allowing me to learn on the go."</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>shrilakshmi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="js/script.js"></script>
</body>
</html>