<?php
   require('../includes/connection.inc.php');
   require('../includes/functions.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Leaflet sample</title>
<link rel="stylesheet" href="../assets/styleproduct.css"> 
<link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-
0.7.3/leaflet.css"/>
<script src = "http://cdn.leafletjs.com/leaflet-
0.7.3/leaflet.js"></script>


</head>
<body>
<?php require('../includes/search.php'); ?>
    <div class="main">
    <div class="item">
        <img src="../assets/img/product-1.jpg" alt="coriander" width=40%;>
        <div class="description">
            <a href="#">Fresho</a>
            <H2 style="font-size: 23px;">Coriander Leaves</H2>
            <p><s>MRP:₹87</s></p>
            <h3><p>Price:<b>₹63.51</b></p></h3><span>(₹63.51 / kg)</span>
            <p>You Save:27% OFF</p>
            <p>(inclusive of all taxes)</p>
            <button style="width: 100%;font-size: 20px; font-weight: 500;" class="green_button">Add to Cart</button>
            <a href="#">Add to wishlist</a>
        </div>
    </div>
    <div class="speciality">
        <H3 style="text-align: center;">Why choose Fresho?</H3>
        <hr>
        <div class="speciality_content">
           <div class="box">
            <img src="../assets/icons/quality_check.svg" alt="quality_check">
            <p><b>Quality</b></p>
            <p class="not_emp">You can trust</p>
           </div>
           <div class="box">
            <img src="../assets/icons/time.svg" alt="time">
            <p><b>On Time</b></p>
            <p class="not_emp">Guarantee</p>
           </div>
           <div class="box">
            <img src="../assets/icons/delivery_van.svg" alt="delivery_van">
            <p><b>Free</b></p>
            <p class="not_emp">Delivery</p>
           </div>
           <div class="box">
            <img src="../assets/icons/box_return.svg" alt="box_return">
            <p><b>Return Policy</b></p>
            <p class="not_emp">No Quest asked</p>
           </div>
        </div>
        <hr>
    </div>
    <h3 style="text-align: center;">How we cultivate?</h3>
    <div id="video">
    <video controls src="../assets/videos/CorianderFarm.mp4" width="400px" height="200px" 
    style="border-radius: 30px; margin-top:20px;" >
        <track label="English" kind="subtitles" srcland="en" src="./videos/English.vtt" default>
        <track label="Marathi" kind="subtitles" srcland="mr" src="./videos/Marathi.vtt" default>
    </video>
    <div id = "map" style = "width: 400px; height: 200px; margin:50px; border-radius: 20px;"></div>
</div>
    
<div class="product_company_description">
    <h3>Fresho Coriander Leaves</h3>
    <div class="product_description">
        <div class="actual_description">
            <h5>About the Product</h5>
            <ul class="not_emp2">
                <li>Coriander leaves are green, fragile with a decorative appearance. They contain minimal aroma and have a spicy sweet taste.</li>
                <li>Now do not bother wasting time cutting off the roots as we value your money and time and provide you the freshest leafy edible parts .</li>
            </ul>
        </div>
        <hr>
        <div class="actual_description">
            <h5>Benefits</h5>
            <ul class="not_emp2">
                <li>Coriander leaves fight food poisoning and lower blood sugar levels.</li>
                <li>They relieve urinary tract infections and help in maintaining a healthy menstrual cycle while preventing neurological inflammations and diseases.</li>
                <li>Tip - Add coriander leaves to boiling water. Let it cool down and then consume it. Drink this water every morning to cleanse the stomach.</li>
            </ul>
        </div>
        <hr>
        <div class="actual_description">
            <h5>Other Product Info</h5>
            <ul class="not_emp2">
                <li>We deliver coriander leaves in the best hygienic packages which you can directly store in your refrigerator.</li>
                <li>Used in curries, pickles, chutneys and for garnishing soups, rice, etc. Sprinkle the leaves over fresh salads.</li>
            </ul>
        </div>
        <hr>
        <div class="actual_description">
            <h5>About the Product</h5>
            <ul class="not_emp2">
                <li>EAN Code: 100003260001Sourced & Marketed by: Supermarket Grocery Supplies Pvt. Ltd, No. 7, Service Road, Off 100 Feet Road Indiranagar Landmark: Above HDFC Bank Bangalore, Karnataka 560071|Country of Origin: India</li>
            </ul>
        </div>
    </div>
</div>
</div>
<?php
            require('../includes/footer.inc.php');
        ?>
    <script>
    // Creating map options
    var mapOptions = {
    center: [19.9975, 73.7898],
    zoom: 10
    }
    // Creating a map object
    var map = new L.map('map', mapOptions);
    // Creating a Layer object
    var layer = new
    L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    // Adding layer to the map
    map.addLayer(layer);
    // Creating a marker
    var marker = L.marker([19.9975, 73.7898]);
    // Adding marker to the map
    marker.addTo(map);

    var canvas = document.getElementById('myCanvas');
    var ctx = canvas.getContext('2d');
    ctx.font = 'bold 50px "Kaushan Script", cursive';
    ctx.fillStyle = 'green';
    ctx.fillText('FFF', 50, 100);
    ctx.fillStyle = 'green';
    ctx.beginPath();
    ctx.moveTo(180, 120);
    ctx.quadraticCurveTo(200, 100, 220, 120);
    ctx.quadraticCurveTo(210, 140, 180, 120);
    ctx.fill();
    ctx.beginPath();
    ctx.moveTo(240, 120);
    ctx.quadraticCurveTo(260, 100, 280, 120);
    ctx.quadraticCurveTo(270, 140, 240, 120);
    ctx.fill();
    
    </script>
    </body>
    </html>