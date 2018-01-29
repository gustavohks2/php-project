<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- ----------  META --------- -->
    <meta charset="UTF-8">
    <meta name="robots" content="follow">
    <meta name="author" content="Gustavo Henrique">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="PHP login system project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ----------  FONTS --------- -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Playfair+Display" rel="stylesheet"> 
    <!-- ----------  STYLES --------- -->
    <link rel="stylesheet" href="css/font-awesome-4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
    
  <!-- ----------  HEADER --------- -->
    <header class="header" id="#header">
      <div class="navigation">
        <div class="navigation__logo-box">
          <i class="navigation__logo fa fa-code"></i>
        </div>
  
        <h3 class="navigation__heading">Dev Solutions</h3>
        
        <form action="includes/inc.login.php" method="POST" class="navigation__form">
          <div class="navigation__form-group">
            <label class="navigation__label" for="username">Username</label>
            <input id="username" type="text" class="navigation__input" name="username" placeholder="Username" required>
          </div>
          <div class="navigation__form-group">
            <label class="navigation__label" for="password">Password</label>
            <input id="password" type="password" class="navigation__input" name="password" placeholder="Password" required>
          </div>
          <input class="btn btn--blue btn--block" type="submit" name="submit" value="Login">
        </form>
      </div>

      <div class="header__center-info">

        <div class="header__logo-box u-animation-fadein">
          <i class="header__logo fa fa-code"></i>
        </div>
  
        <div class="header__text-box u-animation-fadein">
          <div class="heading-primary u-margin-top-medium u-margin-bottom-medium">
              <h1 class="heading-primary--main u-animation-fadein">Dev Solutions</h1>
              <h2 class="heading-primary--sub"><span class="u-text-underlined">Sign up</span> today and discover awesome things!</h2>
          </div>
        </div>
        
        <a href="#signup-popup" class="btn btn--rounded btn--blue u-animation-fadein">Sign up</a>
      </div>
    </header>

    <!-- ----------  MAIN CONTENT --------- -->
    <main>
      <?php
        if(isset($_SESSION)) {
          # CODE
        }
      ?>
    </main> <!-- ----------  END MAIN CONTENT --------- -->

    <!-- ----------  SIGN UP FORM POPUP --------- -->
    <div class="signup-popup" id="signup-popup">
      <div class="signup-popup__content">
        <a href="#" class="signup-popup__close">&times;</a>
        <div class="row">
          <div class="col-1-of-2">
            <h2 class="heading-tertiary heading-tertiary--gray u-margin-bottom-small">Sign Up</h2>
            <form class="form" action="includes/inc.signup.php" method="POST">

              <div class="form__group">
                <input class="form__input" id="name" type="text" name="name" placeholder="Name" required>
                <label class="form__label" for="name">Name</label>
              </div>

              <div class="form__group">
                <input class="form__input" id="email" type="email" name="email" placeholder="E-mail" required>
                <label class="form__label" for="E-mail">E-mail</label>
              </div>

              <div class="form__group">
                <input class="form__input" id="username" type="text" name="username" placeholder="Username" required>
                <label class="form__label" for="username">Username</label>
              </div>

              <div class="form__group">
                <input class="form__input" id="password" type="password" name="password" placeholder="Password" required>
                <label class="form__label" for="password">Password</label>
              </div>

              <span class="form__radio-caption">Gender:</span>

              <div class="form__radio-group">
                <input class="form__radio-input" id="male" type="radio" name="gender" value="m">
                <label class="form__radio-label" for="male">
                  <span class="form__radio-button"></span>
                  Male
                </label>
              </div>

              <div class="form__radio-group">
                <input class="form__radio-input" id="female" type="radio" name="gender" value="f">
                <label class="form__radio-label" for="female">
                  <span class="form__radio-button"></span>
                  Female
                </label>
              </div>

              <input class="btn btn--rounded btn--purple u-margin-top-small" name="submit" type="submit" value="Send">
              
            </form>
          </div>
        </div>
        <h2 class="signup-popup__call">We develop your needs!</h2>
      </div>
    </div><!-- ----------  END SIGN UP FORM POPUP --------- -->
  </body>
</html>