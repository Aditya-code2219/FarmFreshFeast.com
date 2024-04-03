<?php
 require('../includes/connection.inc.php');
 require('../includes/getProduct.php');
 require('../includes/showProduct.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/style1.css" rel="stylesheet">
</head>
<body>
    <?php require('../includes/top.inc.php');?>
    <?php require('../includes/search.php'); 
    showProduct();?>
    <div class="products_page"> 
            <?php getProduct(); ?>
            <?php getProduct_categories(); ?>
    </div>
    
    <?php require('../includes/footer.inc.php');?>
    
</body>
</html>