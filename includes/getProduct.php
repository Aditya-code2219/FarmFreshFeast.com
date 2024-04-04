<?php 
require('../includes/connection.inc.php');
function getProduct()
{
    global $con;
    if(!isset($_GET['category']))
    {
$sql="select * from product order by rand()";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){?>
        
        <div class="product">
        <a href='?product=<?php echo $row['product_id']?>'>
            <img class="product_img" src="./img/<?php echo $row['image']?>" alt="<?php echo $row['image']?>">
            </a>
            <div class="product_info">
            <a href='?product=<?php echo $row['product_id']?>'>  
            <p style="font-size: 13px;"><u><?php echo $row['vendor']?></u></p>
            <p style="font-weight: 1000; font-size: large;"><?php echo $row['product_name']?></p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p><?php echo $row['min_order']?>kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 <?php echo $row['price']?> </span><span style="font-size:small;"><s>&#8377 <?php echo $row['mrp']?></s></span></p></a>
            <!--<button type="button" class="AddToCart" onclick="window.location.href = window.location.href + '?add_to_cart=<//?php echo $row['product_id']?>';"><span>&#x1F6D2;</span> Add to cart</button>-->
            <a href='?add_to_cart=<?php echo $row['product_id']?>' class="AddToCart" ><span>&#x1F6D2</span> Add to cart</a> 
            <span class="wishlist">&hearts;</span>     
        
        </div>
        </div>
<?php }} }

function getProduct_farmer()
{
    global $con;
    if(!isset($_GET['category']))
    {
$sql="select * from product order by rand()";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){?>
        
        <div class="product">
        <a href='?product=<?php echo $row['product_id']?>'>
            <img class="product_img" src="./img/<?php echo $row['image']?>" alt="<?php echo $row['image']?>">
            <div class="product_info">
            <p style="font-size: 13px;"><u><?php echo $row['vendor']?></u></p>
            <p style="font-weight: 1000; font-size: large;"><?php echo $row['product_name']?></p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p><?php echo $row['min_order']?>kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 <?php echo $row['price']?> </span><span style="font-size:small;"><s>&#8377 <?php echo $row['mrp']?></s></span></p>
        </div>
        </a>
        </div>
<?php }} }
function getProduct_categories()
{
    global $con;
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    $sql="select * from `product` where categories_id=$category_id";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res)){?>
        <div class="product">
        <a href='?product=<?php echo $row['product_id']?>'>
            <img class="product_img" src="./img/<?php echo $row['image']?>" alt="Tomatoes">
            <div class="product_info">
            <p style="font-size: 13px;"><u><?php echo $row['vendor']?></u></p>
            <p style="font-weight: 1000; font-size: large;"><?php echo $row['product_name']?></p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p><?php echo $row['min_order']?>kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 <?php echo $row['price']?> </span><span style="font-size:small;"><s>&#8377 <?php echo $row['mrp']?></s></span></p>
            <a href='?add_to_cart=<?php echo $row['product_id']?>' class="AddToCart" ><span>&#x1F6D2</span> Add to cart</a> 
            <span class="wishlist">&hearts;</span>
       
        </div>
    </a>
        </div>
<?php } }}
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart()
{
    if(isset($_GET['add_to_cart']))
    {
        global $con;
        $get_ip_add=getIPAddress();
        $get_product_id=$_GET['add_to_cart'];
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
        $res=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($res);
       
            $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_add',0)";
            $res=mysqli_query($con,$insert_query);
            echo "<script>window.open('index.php''_self')</script>";
        
    }
}

function cart_item()
{
    if(isset($_GET['add_to_cart']))
    {
        global $con;
        $get_ip_add=getIPAddress();
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
        $res=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($res);
    }else{
        global $con;
        $get_ip_add=getIPAddress();
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
        $res=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($res);
        }
        echo $num_of_rows;
}

function total_cart_items(){
    global $con;
    $get_ip_add=getIPAddress();
    $total=0;
    $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $res=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($res))
    {
        $product_id=$row['product_id'];
        $select_products="select * from `product` where product_id='$product_id'";
        $result_products=mysqli_query($con,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_product_price['price']);
            $product_values=array_sum($product_price);
            $total += $product_values;
        }
    }
    echo $total;
}
function orders(){
    global $con;
    $get_ip_add=getIPAddress();
    $cart_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $res=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_assoc($res)){
    $restaurant_name="select * from `cart_details` where ip_address='$get_ip_add'";
    ?>
    <div class="container product-container">
    <h2>Products</h2>
</div>

<div class="container">
    <h2>Order Details</h2>
    <div class="order-details">
        <div class="attribute restaurant-name">
            <label>Restaurant Name:</label>
            <div></div>
        </div>
        <div class="attribute contact">
            <label>Contact:</label>
            <div></div>
        </div>
        <div class="attribute address">
            <label>Address:</label>
            <div></div>
        </div>
        <div class="attribute quantity">
            <label>Quantity:</label>
            <div></div>
        </div>
        <div class="attribute special-instructions">
            <label>Special Instructions:</label>
            <div></div>
        </div>
        <button class="proceed-to-payment">Proceed to Payment</button> <!-- Added button -->
    </div>
</div>
<?php }} 
?>