<?php
require_once "./clasess/hero.php"; // Включіть клас Hero

// Створіть об'єкт класу Hero
$hero = new Hero();

// Ініціалізуйте змінну $heroDetails з пустим масивом
$heroDetails = [];

// Перевірте, чи передано ID героя через параметр запиту
if (isset($_GET['id'])) {
    // Отримайте ID героя з параметра запиту
    $heroId = $_GET['id'];

    // Отримайте дані про героя за його ID з бази даних
    $heroDetails = $hero->getById($heroId);
}

?>

<html>
<head>
     <link href="style/hero_detail.css" rel="stylesheet">
  </head>
<body>
  <div>
    <?php include './components/header.php'; ?>
  </div>
  <main>
    <div class="card">
      <div class="card__title">
      </div>
      <div class="card__body">
        <div class="half">
          <div class="featured_text">
            <h2> <img src="<?php echo $heroDetails['categoryimg']; ?>" alt=""> <span > <?php echo $heroDetails['category']; ?></span></h2>
            <p class="sub"><?php echo $heroDetails['name']; ?> </p>
            
          </div>
          <div class="image">
            <img src="<?php echo $heroDetails['img']; ?>" alt="">
          </div>
        </div>
        <div class="half">
            <?php
                $description = $heroDetails['description'];
                $maxLength = 500; // Максимальна кількість символів
                if (strlen($description) > $maxLength) {
                    $shortDescription = substr($description, 0, $maxLength) . '...'; // Обрізати текст
                    echo "<span class='short-description'>$shortDescription</span>";
                    echo "<span class='full-description' style='display: none;'>$description</span>";
                    echo "<button class='show-more-btn'>Показати більше</button>";
                } else {
                    echo "<p>$description</p>";
                }
            ?>
        </div>
      
      </div>
      <div class="card__footer">
        <div class="recommend">
          <p>ATTACK TYPE</p>
          <h3><?php echo $heroDetails['attack_type']; ?></h3>
        </div>
        <div class="action">
          <a href="heroes.php">
            <button type="button">go back to heroes</button>
          </a>
        </div>
      </div>
    </div>
  </main>
<div>
  <?php include './components/footer.php';?>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showMoreBtn = document.querySelector('.show-more-btn');
        if (showMoreBtn) {
            showMoreBtn.addEventListener('click', function() {
                var shortDesc = document.querySelector('.short-description');
                var fullDesc = document.querySelector('.full-description');
                if (shortDesc && fullDesc) {
                    shortDesc.style.display = 'none';
                    fullDesc.style.display = 'inline';
                }
            });
        }
    });
</script>



</body>

</html>
