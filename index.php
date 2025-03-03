  <?php
  include "services/database.php";
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    $sql = "INSERT INTO porto (name, email, message) VALUES ('$name', '$email', '$message')";
  
    if ($db->query($sql)) {
      echo "Data masuk";
    } else {
      echo "Error: ";
    }
  }
  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waan</title>
    <link rel="shortcut icon" href="assets/images/logoiwan.png" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;500;600;700;800&display=swap"
      rel="stylesheet">
  </head>

  <body>

  <!-- header -->
  <?php include "assets/layout/header.php";?>

    <main>
      <article>

      <!-- Hero -->
        <?php include 'assets/layout/hero.php';?>

        <!-- Portofolio -->

        <?php include 'assets/layout/portofolio.php'?>

        <!-- skills -->
        <?php include 'assets/layout/skill.php'?>

        <!-- timeline -->

        <?php include 'assets/layout/timeline.php'?>

        <!-- contact -->

        <?php include 'assets/layout/contact.php'?>

      </article>
    </main>

    <!-- footer -->
      <?php include 'assets/layout/footer.php'; ?>
    
      <!-- js -->
    <script src="./assets/js/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>

  </html>