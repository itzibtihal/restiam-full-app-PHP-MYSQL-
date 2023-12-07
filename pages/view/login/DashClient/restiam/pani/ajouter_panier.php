<?php 

include_once "con_dbb.php";


// verifier si une sexxion existe 
if (!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['panier'])){
      
    $_SESSION['panier']= array();
}


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $produit = mysqli_query($con,"SELECT * FROM menu WHERE id=$id");
    if(empty(mysqli_fetch_assoc($produit))){
        die("Ce produit n'existe pas");
    }


    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++;
    }else {
        $_SESSION['panier'][$id]= 1;
         
        

        // echo "le produit a bien ete mis dans le panier ";


        // var_dump($_SESSION['panier']);

    }
    header("location:menu.php");
   
}



?>