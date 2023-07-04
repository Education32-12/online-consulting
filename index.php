<?php 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Foreign Education Consultancy Services</title>
  <style>
    /* CSS styles for the homepage layout */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #f5f5f5;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    nav ul li {
      display: inline-block;
      margin: 0 10px;
    }

    nav ul li a {
      color: #131313;
      text-decoration: none;
      padding: 5px;
    }
    nav ul li a:hover{
      color: #0056b3;
    }
    section {
      padding: 20px;
      text-align: center;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .banner {
      position: relative;
      margin-top: 50px;
    }

    .banner img {
      width: 100%;
      height: auto;
    }

    .banner h1 {
      position: absolute;
      top: 40%;
      left: 10%;
      font-size: 60px;
      color: #fff;
    }

    .banner p {
      position: absolute;
      top: 50%;
      left: 10%;
      width: 35%;
      color: #fff;
      font-size: 22px;
    }
    .about-section {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 50px;
      border: 2px rgb(195, 185, 185);
    }

    .about-image {
      flex: 1;
      padding: 0 20px;
    }

    .about-image img {
     justify-content: left;
     width: 80%;
      height: 440px;
      border-radius: 2px;
    }

    .about-content {
      flex: 1;
      padding: 0 20px;
      
    }

    .about-content h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .about-content p {
      font-size: 16px;
      line-height: 1.5;
    }
    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 aspect ratio */
    }
  
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    
  </style>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <header>
    <h1>Foreign Education Consultancy Services</h1>
  </header>

  <nav>
    <ul>
      <li><a href="start.php">Start</a></li>
      <li><a href="consultancy.php">Consultancy</a></li>
      <li><a href="register.php">Registration</a></li>
      <li><a href="login.php">Log in</a></li>
      <li><a href="acedmics.php">Academics</a></li>
      <li><a href="booking.php">Meet in person</a></li>
    </ul>
  </nav>

  <section>
    <div class="banner">
      <img src="image/background.jpg">
      <h1>Shape It With Us</h1>
<!-- for video
<div class="video-container">
  <iframe src="video/a.mp4" frameborder="0" allowfullscreen></iframe>
</div> -->

      <p>
        Come and join us. Together, we can shape your life.
        We will help you go to the places you want to travel.
        We will help you achieve it all before you can realize it.
      </p>
    </div>
  </section>

  <!----  this for about us------>
  <section class="about-section">
    <div class="about-image">
      <img src="image/pexels-rfstudio-3810792.jpg" alt="About Us Image">
    </div>
    <div class="about-content">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque semper lacus ut interdum. Nulla euismod, purus sed semper vulputate, ligula nisl iaculis tellus, id blandit dui tellus vitae ex. Nullam et ante euismod, convallis nunc vel, mollis orci.</p>
      <p>Aliquam suscipit, tortor vitae semper luctus, massa metus condimentum mi, eget rutrum ex purus in leo. Nullam ut fermentum tellus. Sed aliquet velit vel ex interdum, at egestas dolor varius.</p>
    </div>
  </section>
  <!-- This is  second part of the web page -->

  <section class=" course">
    <h1> Services avilable</h1>
   

    <div class="row">
<div class="course-col">
 <h3> Under Graduate</h3>
 <p> This  system is supposed to help all the students who are willing to pursue their plans for future study in the foreign land</p>
  

</div>

<div class="course-col">
  <h3> Post Graduate</h3>
  <p>   After completing their study (bachelors), they can pursue their higher study at the same location or at diffrent location</p>
 </div>

 <div class="course-col">
  <h3> Diploma</h3>
  <p> Students can even apply for the diploma programm if it is avilable. They may get vocational or non vocational skills.</p>
 </div>
    </div>
    <h1 style="padding: 0px; margin-top: 5pxx; text-align: center;justify-content: center; "> To learn more, visit  here</h1>
  <div class="cta-button">
    <a href="acedmics.php">Visit acedmics</a></div>
  </section>
<section>
  
</section>

  <footer>
    &copy; 2023 Foreign Education Consultancy Services. All rights reserved.
  </footer>
</body>
</html>
