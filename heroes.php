<?php
include './clasess/hero.php';

$hh = new Hero();
$heroes = $hh->getHeroes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/heroes.css">
    
  </head>
<body>
<?php include './components/header.php'; ?>

  <main>
            <!--header text-->
            <div>
                <div class="chouseheadertext">CHOOSE YOUR HERO</div>
                <div class="chousehbodytext">From magical tacticians to fierce brutes and cunning rogues, Dota 2's hero pool is massive and limitlessly diverse. Unleash incredible abilities and devastating ultimates on your way to victory.</div>
            </div>
            <!-- grid heroes-->
                <ul class="heroes" id="objectList">
                    <?php foreach ($heroes as $hero) { ?>
                        <li class="herogrid" href="" style="background-image: url('<?php echo $hero['img']; ?>');">
                            <div class="heroContainer">
                                <img alt="" src="<?php echo $hero['categoryimg']; ?>" class="herocatygoryicon">
                                <div class="heroname"><?php echo $hero['name']; ?></div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>

                  <!-- <li  class="herogrid" href="" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/ancient_apparition.png);">
                    <div class="heroContainer">
                      <img alt="" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png" class="herocatygoryicon">
                      <div class="heroname">Ancient Apparition</div>
                    </div>
                  </li>
                  <li  class="herogrid" href="" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/antimage.png); "><div class="heroContainer"><img alt="" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_agility.png" class="herocatygoryicon"><div class="heroname">Anti-Mage</div></div></li>
                  <li  class="herogrid" href="" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/arc_warden.png); "><div class="heroContainer"><img alt="" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_agility.png" class="herocatygoryicon"><div class="heroname">Arc Warden</div></div></li>
                  <li  class="herogrid" href="" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/axe.png); "><div class="heroContainer"><img alt="" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_strength.png" class="herocatygoryicon"><div class="heroname">Axe</div></div></li> -->
                
             
   </main>
   <br>
   <hr>
   <?php include './components/footer.php'; ?>

  <!--  
  scripts 
  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 

     
</body>
</html>
