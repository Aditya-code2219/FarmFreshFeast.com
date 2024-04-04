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
    <?php require('../includes/top.inc1.php');?>
    <?php require('../includes/search_farmer.php'); 
    showProduct();?>
    <div class="products_page"> 
    <?php
            cart();
            getProduct_farmer(); ?>
            <?php getProduct_categories();
            $ip = getIPAddress();  
?>    </div>
    
    <?php require('../includes/footer.inc.php');?>
    
</body>
</html>