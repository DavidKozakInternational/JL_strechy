
<?php
$projekt = $_GET['projekt'];
$folder = "projekty/" . $projekt;
$obrazky = array_diff(scandir($folder), array('..', '.'));
$obrazky = array_values($obrazky);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title><?php echo $projekt; ?></title>
  <link rel="stylesheet" href="style/galerie.css">
  <style>
    .arrow {
      cursor: pointer;
      font-size: 30px;
      color: gold;
      padding: 10px;
      user-select: none;
    }
  </style>
  <script>
    let current = 0;
    function showSlide(index) {
      const slides = document.querySelectorAll('.slide');
      const dots = document.querySelectorAll('.dot');
      slides.forEach((s, i) => {
        s.style.display = i === index ? 'block' : 'none';
        dots[i].classList.toggle('active', i === index);
      });
      current = index;
    }
    function nextSlide() {
      const slides = document.querySelectorAll('.slide');
      showSlide((current + 1) % slides.length);
    }
    function prevSlide() {
      const slides = document.querySelectorAll('.slide');
      showSlide((current - 1 + slides.length) % slides.length);
    }
    window.onload = () => showSlide(0);
  </script>
</head>
<body>
  <div class="project-slideshow">
    <h2><?php echo $projekt; ?></h2>

    <div style="display: flex; align-items: center; justify-content: center;">
      <span class="arrow" onclick="prevSlide()">&#10094;</span>
      <div style="flex-grow: 1;">
        <?php foreach ($obrazky as $index => $img): ?>
          <div class="slide" style="display: none;">
            <img src="<?php echo $folder . '/' . $img; ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
      <span class="arrow" onclick="nextSlide()">&#10095;</span>
    </div>

    <div class="dots">
      <?php foreach ($obrazky as $index => $img): ?>
        <span class="dot" onclick="showSlide(<?php echo $index; ?>)"></span>
      <?php endforeach; ?>
    </div>

    <p><a href="galerie.php">← Zpět na galerii</a></p>
  </div>
</body>
</html>
