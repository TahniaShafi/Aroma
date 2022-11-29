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
  <body class="works_on_smartphone">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>

    <header>
      <div class="right">
        <div class="fb-share-button" data-href="http://34.201.64.117/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F34.201.64.117%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
<a href="index.php"><h1><span style="color: lightyellow">Aroma</span></h1></a>
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



        <h1>Contact Us about your Order! </h1>
    <h5>Select your scented candle by choice. Candle pictures and number are on the homepage. All our candles are $10. Message us your name and email to order the item for home delivery.</h5>

    <br>
    <form action="mailto:tahniac193252@gmail.com" method="post" enctype="text/plain">
        <p>
          <label>Name </label>
          <br>
          <input name="YourName" type="text">
        </p>
        <p>
          <label>Email </label>
          <br>
          <input Name="YourEmail" type="email"><br>
        </p>
        <p>
            <label>Address </label>
            <br>
            <input Name="YourAddress" type="text"><br>
          </p>
        <p>
          <label>Message</label>
          <br>
          <textarea name="YourMessage" name="name" rows="8" cols="80"></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
      </form>                 



</article>

</main>
<footer>Powered by HTML, CSS, & JavaScript</footer>
</body>
</html>
