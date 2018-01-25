<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="follow">
    <meta name="author" content="Gustavo Henrique">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="PHP login system project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
    
    <header class="header">
      <div class="navigation">
        <div class="navigation__logo-box">
          <i class="navigation__logo">&lt;/&gt;</i>
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
          <i class="header__logo">&lt;/&gt;</i>
        </div>
  
        <div class="header__text-box">
          <div class="heading-primary u-margin-top-medium u-margin-bottom-medium">
              <h1 class="heading-primary--main u-animation-fadein">Dev Solutions</h1>
              <h2 class="heading-primary--sub u-animation-fadein"><span class="u-text-underlined">Sign up</span> today and discover awesome things!</h2>
          </div>
        </div>
        
        <button class="btn btn--rounded btn--blue u-animation-fadein">Sign up</button>
      </div>
    </header>

    <main>
      <section class="sinup-popup">

      </section>
    </main>
  </body>
</html>