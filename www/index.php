<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>JL střechy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="JL střechy – Střešní práce s citem a dřevem. Tesařství, klempířství, prodej výrobků.">
  <meta property="og:title" content="JL střechy">
  <meta property="og:image" content="images/preview.jpg">
  <meta property="og:description" content="Kvalitní řemeslo bez železa. Vizuálně i funkčně precizní střechy.">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style/css.css">

</head>
<body>
  <div class="container">
    <!-- Úvodní kotva -->
    <div id="Úvod"></div>

<nav class="main-nav">
<div class="menu-logo"><img src="images/logo.png" alt="JL Střechy logo"></div>

  <div class="menu-group"><a href="#uvod">Úvod</a></div>

  <div class="menu-group">
    <a href="#o-nas">O nás</a>
    <ul class="submenu">
      <li><a href="#profil">Profil zakladatele</a></li>
      <li><a href="#mise">Mise a hodnoty</a></li>
      <li><a href="#doklady">Oficiální doklady & kontakty</a></li>
      <li><a href="#certifikace">Certifikace: IČ, DIČ, OSSZ, EORI</a></li>
    </ul>
  </div>

  <div class="menu-group">
    <a href="#sluzby">Služby</a>
    <ul class="submenu">
      <li><a href="#remeslo">Řemeslné zakázky</a></li>
      <li><a href="#docasne">Dočasné zaměstnávání</a></li>
      <li><a href="#vyroba">Výroba a e-shop</a></li>
      <li><a href="#vypadek">Náhradní řešení při výpadku pracovníků</a></li>
    </ul>
  </div>

  <div class="menu-group">
    <a href="#pro-firmy">Pro firmy</a>
    <ul class="submenu">
      <li><a href="#spoluprace">Jak probíhá spolupráce</a></li>
      <li><a href="#vyhody-firem">Přehled výhod</a></li>
      <li><a href="#reference">Reference a zakázky</a></li>
      <li><a href="#poptavka">Rychlý formulář: Zadat poptávku</a></li>
    </ul>
  </div>

  <div class="menu-group">
    <a href="#pro-pracovniky">Pro pracovníky</a>
    <ul class="submenu">
      <li><a href="#jak-se-pridat">Jak se přidat do týmu</a></li>
      <li><a href="#vyhody-prace">Výhody práce</a></li>
      <li><a href="#formular-pracovnik">Formulář: Chci pracovat</a></li>
      <li><a href="#social-media">Sociální sítě</a></li>
    </ul>
  </div>

  <div class="menu-group"><a href="#galerie">Galerie</a></div>
  <div class="menu-group"><a href="#kontakt">Kontakt</a></div>

  <button id="toggle-darkmode">🌙</button>
</nav>


    <header data-aos="fade-up">
      <img src="images/logo.png" alt="JL Střechy logo" class="logo-fixed">

      

      <div class="intro-text">
        <h1>POSTAVME TO!</h1>
        <p>Střechy stavíme s citem a dřevem.<br>Bez zbytečného železa.</p>
        <button onclick="location.href='#services'">Naše služby</button>
      </div>
      <div class="intro-img">
        <img src="images/worker.jpg" alt="Pracovník">
      </div>
    </header>

    <!-- O nás sekce -->
    <section id="O-nás" data-aos="fade-up" class="contact-wrapper">
      <h2>O nás</h2>
      <p>Jsme tým řemeslníků s vášní pro dřevo a krásné střechy. Děláme věci poctivě – bez kompromisů.</p>
    </section>

    <section class="services" id="services" data-aos="fade-up">
      <h2>Co děláme</h2>
      <div class="service-grid">
        <div class="service-item" data-aos="zoom-in"><i>🏠</i><strong>Střechy</strong></div>
        <div class="service-item" data-aos="zoom-in"><i>🪚</i><strong>Tesařství</strong></div>
        <div class="service-item" data-aos="zoom-in"><i>🔧</i><strong>Klempířství</strong></div>
        <div class="service-item" data-aos="zoom-in"><i>🏘️</i><strong>Prodej výrobků</strong></div>
      </div>
    </section>

    <section class="gallery" id="gallery" data-aos="fade-up">
      <h2>Realizace</h2>
      <div class="gallery-grid">
        <div class="gallery-item" data-aos="zoom-in">
          <img src="images/05_Garáž dřevostavba/Obrázek WhatsApp.jpg" alt="Krov">
        </div>
        <div class="gallery-item" data-aos="zoom-in">
          <img src="images/02-BALKON/IMG-20250720-WA0022.jpg" alt="Bungalov">
        </div>
        <div class="gallery-item" data-aos="zoom-in">
          <img src="images/01.jpg" alt="Dům">
        </div>
      </div>
      <br />
      <button class="btn-yellow">Celá galerie</button>
    </section>

    <section class="contact-form" id="contact" data-aos="fade-up" class="contact-wrapper">
      <div style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 12px; padding: 2rem; max-width: 600px; margin: 2rem auto; color: #fff;">
        <h2>Kontaktujte nás</h2>
        <form action="mailto:info@jlstrechy.cz" method="POST" enctype="text/plain">
          <label for="name">Jméno a příjmení</label><br>
          <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; margin-bottom: 1rem;"><br>
          <label for="email">E-mail</label><br>
          <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; margin-bottom: 1rem;"><br>
          <label for="message">Zpráva</label><br>
          <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem;"></textarea><br><br>
          <button type="submit" class="btn-yellow">Odeslat</button>
        </form>
      </div>
    </section>

    


<footer class="footer glass-footer">
  <div class="footer-left-icons">
    <div class="footer-icons">
      <a href="https://www.facebook.com/" target="_blank"><img src="images/social_footer/facebook-ikon.jpeg" alt="Facebook"></a>
      <a href="https://www.instagram.com/" target="_blank"><img src="images/social_footer/pintress-ikon.jpeg" alt="Instagram"></a>
      <a href="https://wa.me/420775189574" target="_blank"><img src="images/social_footer/whatsapp-ikon.jpeg" alt="WhatsApp"></a>
      <a href="tel:+420775189574"><img src="images/social_footer/call-ikon.jpeg" alt="Telefon"></a>
    </div>
  </div>
  <div class="footer-center-text">
    <img src="images/social_footer/footerikona.png" alt="DKI logo" class="footer-logo"><br>
    <p><strong>DAVID KOZÁK INTERNATIONAL S.R.O.</strong><br>
    📧 info@david-kozak.com | 🌐 www.david-kozak.com | 📞 +420 775 189 574</p>
  </div>
</footer>



  </div>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const toggle = document.getElementById("toggle-darkmode");
  toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });
});
</script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
      easing: 'ease-in-out'
    });
  </script>
</body>
</html>

