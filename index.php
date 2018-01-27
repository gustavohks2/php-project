<!DOCTYPE html>
<html lang="pt-br">
  <head>
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
    
    <header class="header" id="#header">
      <div class="navigation">
        <div class="navigation__logo-box">
          <i class="navigation__logo fa fa-code"></i>
        </div>
  
        <h3 class="navigation__heading">Dev Solutions</h3>
        
        <form class="navigation__form">
          <div class="navigation__form-group">
            <label class="navigation__label" for="username">Username</label>
            <input id="username" type="text" class="navigation__input" placeholder="Username" required>
          </div>
          <div class="navigation__form-group">
            <label class="navigation__label" for="password">Password</label>
            <input id="password" type="password" class="navigation__input" placeholder="Password" required>
          </div>
          <button class="btn btn--blue btn--block" type="submit">Login</button>
        </form>
      </div>

      <div class="header__center-info">

        <div class="header__logo-box u-animation-fadein">
          <i class="header__logo fa fa-code"></i>
        </div>
  
        <div class="header__text-box u-animation-fadein">
          <div class="heading-primary u-margin-top-medium u-margin-bottom-medium">
              <h1 class="heading-primary--main u-animation-fadein">Dev Solutions</h1>
              <h2 class="heading-primary--sub "><span class="u-text-underlined">Sign up</span> today and discover awesome things!</h2>
          </div>
        </div>
        
        <a href="#signup-popup" class="btn btn--rounded btn--blue u-animation-fadein">Sign up</a>
      </div>
    </header>

    <main>
      <div class="signup-popup" id="signup-popup">
        <div class="signup-popup__content">
          <a href="#" class="signup-popup__close">&times;</a>
          <div class="row">
            <div class="col-1-of-2">
              <h2 class="heading-tertiary heading-tertiary--gray u-margin-bottom-small">Sign Up</h2>
              <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                <div class="form__group">
                  <input class="form__input" id="name" type="text" name="name" placeholder="Name">
                  <label class="form__label" for="name">Name</label>
                </div>

                <div class="form__group">
                  <input class="form__input" id="email" type="email" name="email" placeholder="E-mail" autocomplete="off">
                  <label class="form__label" for="E-mail">E-mail</label>
                </div>

                <div class="form__group">
                  <input class="form__input" id="username" type="text" name="username" placeholder="Username">
                  <label class="form__label" for="username">Username</label>
                </div>

                <div class="form__group">
                  <input class="form__input" id="password" type="password" name="password" placeholder="Password">
                  <label class="form__label" for="password">Password</label>
                </div>

                <span class="form__radio-caption">Gender:</span>

                <div class="form__radio-group">
                  <input class="form__radio-input" id="male" type="radio" name="gender" value="male">
                  <label class="form__radio-label" for="male">
                    <span class="form__radio-button"></span>
                    Male
                  </label>
                </div>

                <div class="form__radio-group">
                  <input class="form__radio-input" id="female" type="radio" name="gender" value="female">
                  <label class="form__radio-label" for="female">
                    <span class="form__radio-button"></span>
                    Female
                  </label>
                </div>

                <input class="btn btn--rounded btn--purple u-margin-top-small" type="submit" value="Send">
                
              </form>
            </div>
          </div>
          <h2 class="signup-popup__call">We develop your needs!</h2>
        </div>
      </div>
    </main>
  </body>
</html>