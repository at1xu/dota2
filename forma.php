<?php
  require_once('clasess/form.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $forma = new Forma();
    
    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $txt = $_POST['textarea'];

    $forma->ulozitSpavu($meno, $email, $txt);
  }

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="style/form.css">
  </head>
  <body>
  <?php include './components/header.php'; ?>  
    <div class="dis">
      <h2>
        Thank you for deciding to join us
      </h2>      
      <form id="myForm" method="post">
          <label for="meno">Meno:</label>
          <input type="text" id="meno" name="meno" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="textarea">Textarea:</label>
          <textarea id="textarea" name="textarea" rows="4" required></textarea>

          <label for="suhlas">Súhlas so spracovaním osobných údajov:</label>
          <input type="checkbox" id="suhlas" name="suhlas" required>

          <button class="butn" type="submit">Odoslať</button>
      </form>

    </div>
      <br>
      <br>
      <hr>
      <?php include './components/footer.php'; ?>

   
  </body>
  </html>
