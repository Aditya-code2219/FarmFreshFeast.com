<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.search_div{
    width:100%;
    height:10%;
    background-color: #F2F1EB;
    display:flex;
    justify-content: space-between;
    align-items: center;
    padding:15px 15%;
    
}
.icons{
    height:20px;
    width:20px;
}
.category_list{
    display:flex;   
    flex-direction: row;
    justify-content: space-around;
}
#search_bar{
    height:28px;
    border-radius: 7px;
    border: none;
    border-radius: 30px 30px 3;
}
.textBox{  
    background-image:url(images/search.svg);   
    background-position:left;   
    background-repeat:no-repeat;   
    padding-right:17px;
}
button{
    height:30px;
    border-radius: 20px;
    border:none;
    padding: 1px 6px 1px 6px;  
}
button span{
    vertical-align: middle;
}
.green_button{
    background-color: #88AB8E;
    color:#F2F1EB;
}
.cream_button{
    background-color: #EEE7DA;
}
.main{
    padding: 20px 15%;
}
.item{
    display:flex;
    flex-basis:50%;
}
.description{
    padding-left:50px ;
}
.description a{
    font-size: 12px;
    text-decoration: none;
    color: black;
}
.description p{
    margin:15px 0;
    text-align: left;
    font-size: 15px;
}
.speciality{
    margin:50px 0;
}
hr{
    margin: 10px 0;
}
.speciality_content{
    display: flex;
    flex-grow: 1;
    justify-content: space-between;
    align-items: center;
    padding: 20px 100px;
}
.box{
    background-color: #EEE7DA;
    border-radius: 20px;
    padding: 20px 20px;
    width:150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.box img{
    height: 50px;
}
.not_emp{
    color:grey;
    font-size: small;
}
.not_emp2{
    color:rgb(80, 79, 79); 
    font-size: small;
}
.product_description{
    border-radius: 30px;
    border: 1px solid grey;
    padding:20px 40px;
    margin:20px 0;
}
.actual_description{
    margin:20px 0;
}
.actual_description h5{
   margin-bottom: 10px;
}
#video{
    
    display:flex;
    align-items: center;
}
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
.category_list{
    display:flex;   
    flex-direction: row;
    justify-content: space-between;
    padding:15px 200px;
    background-color: #F2F1EB;
   
}
.category_list li{
    list-style: none;
}
.category_list li a{
    text-decoration: none;
    color:black;
}

</style>

<div class="search_div">
        <input type="text" id="search_bar" name="search_bar" style="width: 55%;" class="textBox" >
        <button type="cart_button" style="width: 20%; " class="green_button"><img src="../assets/icons/cart.svg" class="icons"><span> item(s)-$0</span></button>
        <button type="cart_button" style="width: 20%; " class="cream_button"><img src="../assets/icons/map_direction.svg" class="icons"><span> Search Location</span></button>
    </div>
    <div>
       
        <ul class="category_list">
            <div style="background-color:#88AB8E ; padding:10px; margin:-12px 0; border-radius:20px; color:white;">Select By Catergory ></div>
            <?php 
                $sql="Select * from `categories`";
                $res=mysqli_query($con,$sql);
                
                while($row_data=mysqli_fetch_assoc($res))
                {
                    $category_title=$row_data['category_name'];
                    $category_id=$row_data['category_id'];
                echo "<li><a href='?category=$category_id'>$category_title</a></li>";
                } 
            ?>
        </ul>
    </div>