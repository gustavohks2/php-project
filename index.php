<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="follow">
    <meta name="author" content="Gustavo Henrique">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="PHP login system project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
    <div class="navigation">
      <div class="navigation__logo-box">
        <i class="navigation__logo"></i>
      </div>
      <h3 class="navigation__heading">Dev Solutions</h3>
      <form class="navigation__form">
        <div class="navigation__form-group">
          <label class="navigation__label" for="username">Username</label>
          <input id="username" type="text" class="navigation__input" required>
        </div>
        <div class="navigation__form-group">
          <label class="navigation__label" for="password">Password</label>
          <input id="password" type="password" class="navigation__input" required>
        </div>
        <button class="btn btn--rounded btn--color" type="submit">Login</button>
      </form>
    </div>
    
    <header class="header">
      <div class="header__text-box">
        <div class="header__logo-box">
          <img src="img/dev-solutions-logo.jpg" alt="Dev Solutions logo">
        </div>
        <div class="heading-primary">
            <h1 class="heading-primary--main">Dev Solutions</h1>
            <h2 class="heading-primary--sub">Sign up today, and discover awesome things!</h2>
        </div>
        <button class="btn btn--rounded btn--blue">Sign up</button>
      </div>
    </header>
  </body>
</html>