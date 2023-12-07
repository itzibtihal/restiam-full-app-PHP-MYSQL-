
<?php
 
 session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Restiam</title>
  <link rel="stylesheet" href="style2.css">

    <!-- Main CSS Style  -->
    <link rel="stylesheet" href="../CSS/main.css">

    <!-- Media Query  -->
    <link rel="stylesheet" href="../CSS/media.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<div class="navbar">
        <div class="container">
            <h1 class="logo">
                <a href="index.html">Restiam</a>
            </h1>

            <ul class="links">
                <i class="fa-solid fa-xmark"></i>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../index.html">Chefs</a></li>
                <li><a href="../index.html">Gallery</a></li>
                <li><a href="../index.html">Contact</a></li>
                <li><a href="menu.php">menu</a></li>
                <li><a href="../index.html">Login</a></li>
            </ul>

            <div class="mode">
                <i class="toggle fa-solid fa-moon "></i>
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>

<!-- array_sum($_SESSION['panier']) -->
<br><br><br><br><br>
<a href="panier.php" class="link">Shopping Cart <span> <?php array_sum($_SESSION['panier'])  ?> </span></a>
 <section class="products_list">
  

    <?php

    include_once "con_dbb.php";

    // lister les  poduits
    $req = mysqli_query($con, "SELECT * FROM menu ");
    while ($row = mysqli_fetch_assoc($req)) {


    ?>
      <form action="" class="product">
        <div class="image_product">
          <img src="<?= $row['profile'] ?>" alt="image1">
        </div>
        <div class="content">
          <h4 class="name"><?= $row['name'] ?></h4> <br>
          <p> <?= $row['reviews'] ?> Review(s) <i class="fa-solid fa-eye"></i> </p> <br>
          <p class="description"><?= $row['description'] ?></p>
          <h2 class="price"><?= $row['price'] ?>$</h2>

          <a href="ajouter_panier.php?id=<?= $row['id'] ?>" class="id_product">Add to cart</a>
        </div>
      </form>

    <?php } ?>

  </section>
 
</body>

</html>