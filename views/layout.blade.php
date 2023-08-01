<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/styles.css">
  <title>Hotel Miranda</title>
</head>

<body>
  <header class="header">
    <div class="header__box">
      <span class="header__pre-title">We Make You Feel Comfortable</span>
      <div class="header__left">
        <button id="menuBtn" class="header__menu-btn"></button>
        <a href="./index.php" class="logo logo--header">
          <div class="logo__img logo__img--header"></div>
          <div class="logo__name logo__name--header"></div>
        </a>
      </div>
      <div id="menu" class="header__menu">
        <nav class="header__nav nav">
          <ul class="nav__ul">
            <li class="nav__li"><a href="about.php" class="nav__a">About Us</a></li>
            <li class="nav__li"><a href="rooms.php" class="nav__a">Rooms</a></li>
            <li class="nav__li"><a href="offers.php" class="nav__a">Offers</a></li>
            <li class="nav__li"><a href="contact.php" class="nav__a">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__right">
        <button class="header__icon header__icon--login"></button>
        <button class="header__icon header__icon--search"></button>
      </div>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
  <footer class="footer">
    <a href="./index.php" class="logo logo--footer">
      <div class="logo__img logo__img--footer"></div>
      <div class="logo__name logo__name--footer"></div>
    </a>
    <div class="footer__block footer__description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laudantium, natus maxime sapiente voluptatum
      nihil perferendis voluptate omnis perspiciatis consectetur aliquid vel officia blanditiis nisi soluta repellat
      temporibus asperiores minima!
    </div>
    <div class="footer__block social-row">
      <a href="#" class="social-row__a social-row__a--fb"></a>
      <a href="#" class="social-row__a social-row__a--tw"></a>
      <a href="#" class="social-row__a social-row__a--be"></a>
      <a href="#" class="social-row__a social-row__a--in"></a>
      <a href="#" class="social-row__a social-row__a--yt"></a>
    </div>
    <div class="footer__block services-block">
      <h3 class="footer__title">Services.</h3>
      <ul class="services-block__ul">
        <li>+ Restaurant & Bar</li>
        <li>+ Swimming Pool</li>
        <li>+ Wellness & Spa</li>
        <li>+ Restaurant</li>
        <li>+ Conference Room</li>
        <li>+ Coctail Party House</li>
        <li>+ Gaming Zone</li>
        <li>+ Marriage Party</li>
        <li>+ Party Planning</li>
        <li>+ Tour Consultancy</li>
      </ul>
    </div>
    <div class="footer__block contact-block">
      <h3 class="footer__title">Contact Us</h3>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--phone"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--mail"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
      <div class="contact-block__item">
        <div class="contact-block__icon contact-block__icon--map"></div>
        <div>
          <span class="contact-block__item-title">Phone Number</span>
          <span class="contact-block__item-subtitle">+987 876 765 76 577</span>
        </div>
      </div>
    </div>
    <div class="footer__block legal-block">
      <span class="legal-block__copyright">Copyright@Example - 2022</span>
      <div>
        <a href="#" class="legal-block__a">Terms of Use</a><span class="legal-block__line">|</span><a href="#" class="legal-block__a">Privacy Environmental Policy</a>
      </div>
    </div>
  </footer>
  <script src="./main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>