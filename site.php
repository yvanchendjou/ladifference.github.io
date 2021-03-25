<?php 
    session_start();
    
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    
     ?>
    <!DOCTYPE html>
    <html>
    <head>
     
    </head>
    <body>
        
         
    </body>
    </html>
    
   


    







<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA DIFFERENCE</title>
  <link rel="stylesheet" href="main.css">
  <script src="https://Kit.fontawesome.com/a076d05399.js"></script>
  <!--Normalize CSS File-->
  <link rel="stylesheet" href="normalize.css">

  <!--Google Font - Raleway-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <title>HOME</title>
      <link rel="stylesheet" type="text/css" href="style.css">






</head>


  <body>
  <h1>welcome, <?php echo $_SESSION['name']; ?></h1>
         <nav class="home-nav">
           <a href="change-password.php">Change Password</a>
            <a href="logout.php">Logout</a>
         </nav>






    <div>
     <nav class="name">
                <div class="img">
                 <a href="#"><img src="logo_fichiers/image002.jpg" /></a>
                </div>
                        <div  class="name1">
                          <link rel=" icon " href="logo_fichiers/image002..jpg">
                            <div class=" name2"><a href="#">HOME</a></div>
                            <div class=" name2"><a href="about us.html">ABOUT</a></div>
                            <div class=" name2"><a href="galerie.html">GALERIE</a></div>
                            <div class=" name2"><a href="login.php">LOG IN</a></div>



                        </div>
                    </div>
                </div>

                </div>
            </nav>
     </div>




    </header><br><br>
    <!--Intro-->
    <section class="intro">
<div class="content-intro">
<h1>THE WELL BEING OF YOUR CHILD<span> TOGETHER WE PROGRESS</span></h1><br>

<a href="login.php"><button class="button-intro">CLICK HERE</button></a>
</div>
</section>


<div class="footer">

    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
          <p>The GSB La Difference was created in 2015 </br>
            La Difference Bilingual school consist of two sections</br>
            which include the French section which runs from nursery to class six</br>
            and the English section which runs from pre-nursery to class six</br>
            Both sections are been supervise by the quality manager<p>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>

            </div>
          </div>
        </div>

  <div class="center box">
    <h2>address</h2>
    <div class="content">
      <div class="place">
        <span class="fas fa-map-marker-alt"></span>
        <span class="text">bonamoussadi santa-babbara</span>
      </div></br>

        <div class="phone">
          <span class="fas fa-phone-alt"></span>
          <span class="text">698473621</span>
        </div></br>

          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">gsbladifference@gmail.com</span>
          </div></br>
          </div>
        </div>

        <div class="right box">
          <h2>contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email*</div>
                <input type="email" required></br>
        </div>
        <div class="msg">
          <div class="text">message*</div>
          <textarea rows="2" cols="25" required></textarea>
        </div></
        <div class="btn">
          <button type="submit">send</button>
        </div>
      </form>







  	</footer>

</div>
      <div class="footer-bottom">
        &copy; 2020 | designed by Fonkwa Chendjou
      </div>
</div>





  </body>

  </html>
  <?php 
    }else{
         header("Location: index.php");
         exit();
    }
     ?>
