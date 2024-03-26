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
    
</head>
<body>
    <style>
        *{
    
    margin:0;
    padding: 0;
    box-sizing: border-box;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
a{
    text-decoration: none;
    color: black;
}
.products_page{
    margin:50px;
    padding: 40px;
    box-shadow: 0px 0px 12px rgb(184, 217, 230);
    border-radius: 7px;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap:30px;
}

@media  screen and (max-width:992px){
    .products_page
    {
        grid-template-columns: repeat(3,1fr);
    }
}
@media  screen and (max-width:768px){
    .products_page
    {
        grid-template-columns: repeat(2,1fr);
    }
}
@media  screen and (max-width:500px){
    .products_page
    {
        grid-template-columns: repeat(1,1fr);
    }
}
.product{
   
    border: 1px solid grey;
    border-radius: 10px;
    flex-grow: auto;
}
.product:hover{

    box-shadow: 0px 0px 12px rgb(96, 134, 150);
}
.product_img{
    width:100%;
    height:12rem;
    border-radius: 5px 5px 0px 0px;
}
.product_info{
    margin:10px;
    line-height: 1.7rem;
    position: relative;
}
.AddToCart{
    background-color: rgb(50, 161, 50);
    width:88%;
    color: white;
    padding:5px;
    border: 0;
    border-radius: 10px;
    font-size: large;
}
.AddToCart:hover{
    background-color: green;
}
.wishlist{
    border:1px solid grey;
    padding:2px 7px;
    border-radius: 5px;
    position: absolute;
    right:0;
}
.product-container {
    display: flex;
    flex-direction: column;
}


    </style>
    <?php require('../includes/top.inc.php');?>
    <?php require('../includes/search.php'); 
    showProduct();?>
    <div class="products_page">
    
         <!--/* echo '<div class="product-container">';
          showProduct();
          echo '<div>';
          getProduct();
          echo '</div>';
          getProduct_categories();
          echo '</div>';
          */-->
         
            
            <?php getProduct(); ?>
            <?php getProduct_categories(); ?>
          
        <!--
        <div class="product">
            <img class="product_img" src="../assets/img/product-2.jpg" alt="Potatoes">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Cottage</u></p>
            <p style="font-weight: 1000; font-size: large;">Potatoes</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-3.jpg" alt="Cabbages">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Farm</u></p>
            <p style="font-weight: 1000; font-size: large;">Cabbages</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-4.jpg" alt="Brinjals">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Fresho</u></p>
            <p style="font-weight: 1000; font-size: large;">Brinjals</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-5.jpg" alt="Carrots">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Fresho</u></p>
            <p style="font-weight: 1000; font-size: large;">Carrots</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-6.jpg" alt="Onions">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Farm</u></p>
            <p style="font-weight: 1000; font-size: large;">Onions</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-7.jpg" alt="Cauliflowers">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Fresho</u></p>
            <p style="font-weight: 1000; font-size: large;">Cauliflowers</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
        <div class="product">
            <img class="product_img" src="../assets/img/product-8.jpg" alt="Capsicums">
            <div class="product_info">
            <p style="font-size: 13px;"><u>Fresho</u></p>
            <p style="font-weight: 1000; font-size: large;">Capsicums</p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p>10kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 299 </span><span style="font-size:small;"><s>&#8377 435</s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div> -->
       
    </div>
    
    <?php
            require('../includes/footer.inc.php');
        ?>
    
</body>
</html>