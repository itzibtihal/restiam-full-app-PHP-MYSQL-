<?php 

 session_start();
 include_once "con_dbb.php";

 // delete 
 //si la var del existe 

   if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    unset($_SESSION['panier'][$id_del]);
   }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restiam - Shopping Cart</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style2.css">
    
</head>

<body class="panier">
    <a href="menu.php" class="link"> Menu </a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>action</th>
            </tr>


             <?php
                $total = 0;
                // lister les produits
                // recuperer les cles du tableau

                $ids = array_keys($_SESSION['panier']);

                if(empty($ids)){
                    echo "votre panier est vide ";
                }else {
                     
                    $products = mysqli_query($con," SELECT * FROM menu WHERE id IN (".implode(',',$ids).")" );

                    // lister des produit avec une boucle foreach 

                    foreach($products as $product) :
                        // calculer le total 
                      $total = $total + $product['price'] * $_SESSION['panier'][$product['id']];
                
             ?>


            <tr>
                <td>
                    <img src="<?=$product['profile']?>" alt="">
                </td>
                <td> <?=$product['name']?> </td>
                <td><?=$product['price']?>$</td>
                <td><?=$_SESSION['panier'][$product['id']]?></td>
                <td><a href="panier.php?del=<?=$product['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5 color:black"></i> </a></td>
            </tr>
           
             <?php  
               endforeach; }
             ?> 
               
           
            <tr class="total">
                <th> Total : <?= $total ?> $</th>
            </tr>
            <!-- <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i> </a> -->
        </table>
    </section>
    <br>
    <a href="order.html" class="link"> Confirm the order </a>
</body>

</html>