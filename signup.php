<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="behavior.js"></script>
  <meta charset="UTF-8">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Flagship Phones">
  <meta property="og:description" content="Flagship Phones">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aroma | Signup</title>
  <link href="add.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <link rel="stylesheet" href="behavior.css">
</head>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>Sign up</title>
  </head>
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
  <body>

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

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="signup.php" class="sign-up-form">
          <?php include('errors.php'); ?>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password_1" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm password" name="password_2" />
            </div>
            <input type="submit" class="btn" value="Sign up" name="reg_user" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already have an account? Do Sign In to enjoy more features! :D 
            </p>
            <a href="signin.php">
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
            </a>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <footer>Powered by HTML, CSS, & JavaScript</footer>
  </body>
</html>