<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="behavior.js"></script>
  <meta charset="UTF-8">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Flagship Phones">
  <meta property="og:description" content="Flagship Phones">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aroma | Home</title>
  <link href="add.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <link rel="stylesheet" href="behavior.css">
</head>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>

  <header>
    <div class="right">
      <div class="fb-share-button" data-href="http://34.201.64.117/" data-layout="button_count" data-size="small"><a
          target="_blank"
          href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F34.201.64.117%2F&amp;src=sdkpreparse"
          class="fb-xfbml-parse-ignore">Share</a></div>
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
        data-show-count="false">Tweet</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <a href="index.php">
      <h1><span style="color: lightyellow">Aroma</span></h1>
    </a>
    <ul>
      <li class="logo"><a href="index.php"><img src="logo.jpg" width="100" height="100"></a></li>
      <li><a href="index.php"><b>Home</b></a></li>
      <li><a href="signin.php"><b>Sign in</b></a></li>
      <li><a href="signup.php"><b>Sign Up</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
      <li><a href="aboutus.php"><b>About Us</b></a></li>
      <li><a href="help.php"><b>Help</b></a></li>
      <li><a href="wishlist.php"><b>Wish List</b></a></li>
    </ul>
  </header>
  <main>
    <article>

    <div class="content">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
      <h3>
        <?php 
          echo $_SESSION['success']; 
          unset($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>

  <!-- logged in user information -->
  <?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
  <?php endif ?>
</div>

      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="1.jpg" width="100%">
          <div class="text">Candle 1</div>
        </div>

        <div class="mySlides fade">
          <img src="2.jpg" width="100%">
          <div class="text">Candle 2</div>
        </div>

        <div class="mySlides fade">
          <img src="3.jpg" width="100%">
          <div class="text">Candle 3</div>
        </div>

        <div class="mySlides fade">
          <img src="4.jpg" width="100%">
          <div class="text">Candle 4</div>
        </div>

        <div class="mySlides fade">
          <img src="5.jpg" width="100%">
          <div class="text">Candle 5</div>
        </div>

        <div class="mySlides fade">
          <img src="6.jpg" width="100%">
          <div class="text">Candle 6</div>
        </div>

        <div class="mySlides fade">
          <img src="7.jpg" width="100%">
          <div class="text">Candle 7</div>
        </div>



        <div class="mySlides fade">
          <img src="8.jpg" width="100%">
          <div class="text">Candle 8</div>
        </div>

        <div class="mySlides fade">
          <img src="9.jpg" width="100%">
          <div class="text">Candle 9</div>
        </div>

        <div class="mySlides fade">
          <img src="10.jpg" width="100%">
          <div class="text">Candle 10</div>
        </div>



      </div>
      <br>


      <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) { slideIndex = 1 }
          slides[slideIndex - 1].style.display = "block";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
      </script>
<h2>Be scented with Aroma!</h2>
<p> We Sell Scented Candles since the last 25 years and are professionals in this field. </p> 
<h3>What is scented candle?</h3>
<p> A scented candle, made with fragrant oils mixed into the wax, gives off a pleasant aroma when burning.  A scented candle is a nice touch in a bathroom, especially when guests are over,  in a bedroom, or any room of the house.</p>



    </article>

    
  </main>
  <footer>Powered by HTML, CSS, & JavaScript</footer>
</body>

</html>