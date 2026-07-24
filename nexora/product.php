<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/cab2e38d8c.js" crossorigin="anonymous"></script>  

    <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
      }

    /* NAVBAR */
    header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    background: #111111;
    color: white;
    z-index: 100;
    backdrop-filter: blur(16px);
    position: sticky;
    top:0;
   
    
    

    
   
}

.fa-magnifying-glass {
   color: black;
}

.head-icons {
    display: flex;
    gap: 30px;
}
. fa-cart-arrow-down:hover {
    color: #B8860B;
}
.search-main {
    background: #eee;
    border-radius: 50px;
    display: flex;
    width: 350px;
    height: 25px;
    justify-content: space-between;
    align-items: center;
    padding: 2px 10px;
    border: 2px solid #B8860B;
}

input {
    width: 155px;
    border: none;
    background: none;
    outline: none;
    font-weight: bold;
}



.logo-img {
    width: 80px;
    height: 50px;
}

.menu-img {
    width: 100px;
    height: 70px;
}

.desktop-view a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
     font-family: poppins;
}

.mobile-view a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
}

.mobile-view {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 80px;
    left: 50%;
    right: -3px;
    gap: 20px;
    height: 100vh;
    padding: 50px 20px;
    background: #000000;
     font-family: poppins;
     display: none;
   
    
    
}

.btn {
    padding: 8px 15px;
    border: none;
    background: gold;
    cursor: pointer;
}

.hamburger-menu {
  
    display: flex;
    flex-direction: column;
    gap: 6px;
    display: none;
}

.icon-menu {
    display: flex;
    gap: 50px;
    align-items: center;
}

.menu {
    width: 30px;
    height: 4px;
    background: white;
    border-radius: 10px;

}

.main-images {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #f1f1f1;
}

.product-gallery {
    width: 90%;
    margin-top: 40px;
}



.main-image {
    width: 100%;
    align-items: center;
    height: 450px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0,0,0,0.2);
}

.thumbnails {
    display: flex;
    margin: 15px 0;
    gap: 10px;
    flex-wrap: wrap;
    
   
}

.thumb {
    width: 80px;
    height: 80px;
    object-fit: cover;
}

.thumb.active {
    border: 2px solid #B8860B;
}

.product-details {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.main-product {
    width: 88%;
    background: #fff;
    padding-left: 30px;
    padding-bottom: 30px;
    box-shadow: 0 0 30px rgba(0,0,0,0.2);
    border-radius: 10px;

}

.product-det {
    margin-bottom: 10px;
    font-size: 17px;
    font-family:  Arial, Helvetica, sans-serif;

}

.pro-duct {
    margin: 0;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-bottom: 5px;
}

.pro-price {
    text-align: center;
    margin-bottom: 10px;
    font-size: 20px;
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.price-price {
    text-align: center;
    margin: 0;
    font-size: 25px;
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.details-line {
    width: 90%;
    height: 1px;
    background: #f1f1f1;
    flex: 1;
    display: block;
}

.seller-details {
    width: 88%;
    background: #fff;
    padding-left: 30px;
    padding-bottom: 30px;
    box-shadow: 0 0 30px rgba(0,0,0,0.2);
    border-radius: 10px;
    margin-top: 20px;

}

.see {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-bottom: 5px;
    text-decoration: none;
    color: blue;

}

.contact-seller {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.whatsapp-link {
    text-decoration: none;
    color: #ffffff;
    background: green;
    font-size: 30px;
    padding: 5px;
    border-radius: 70px;
}

.phone-link {
    text-decoration: none;
    color: #ffffff;
    background: black;
    font-size: 30px;
    padding: 5px;
    border-radius: 70px;

}

.product-deta {
    margin-bottom: 10px;
    font-size: 17px;
    font-family:  Arial, Helvetica, sans-serif;
    text-align: center;
   

}


/*product*/

.product-hero {
    position: relative;
    top: -70px;
    margin-top: 70px;
}
.product-card{
    width:300px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
    position:relative;
    transition:.4s;
    padding: 10px;
    margin: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.feature {
    margin: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: poppins;
   

}

.product-img {
    width: 300px;
    height: 40px;
}
.main-product-card {
    dispaly: grid;
    grid-template-colum: repeat(4,1fr);
    gap: 10px;
}

.product-card:hover{
    transform:translateY(-8px);
}

.product-card img{
    width:100%;
    height:300px;
    object-fit:cover;
    border-radius:20px;
    

}

.product-content{
    padding:20px;
     box-shadow:0 10px 30px rgba(0,0,0,.1);
     border-radius:20px;

}

.fabric-wishlist {
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.category{
    color:#000000;
    font-size:27px;
    font-weight:600;
    margin: 0;
    font-family: lora;
}

.product-content h3{
    margin:10px 0;
    color:#111;
}


.price{
    margin-bottom:5px;
}

.current{
    font-size:22px;
    font-weight:700;
    color:#111;
}

.shopper{
    margin-bottom:10px;
}

.shop-from{
    font-size:20px;
    font-weight:500;
    color:#111;

}

.buttons {
    display: flex;
    justify-content: center;
    gap: 40px;
}

.wishlist{
    color:#fff;
    text-decoration: none;
    padding: 10px 10px;
    border-radius: 100px;
    border: 1px solid black;
   
}

.fa-cart-shopping {
    color: black;
}


.view{
    background:#fff;
    color:#111;
    border:1px solid #ffffff;
    text-decoration: none;
    padding: 5px 10px;
     border-radius:10px;
     width: 100%;
     text-align: center;
     box-shadow: 3px 7px 16px rgba(0,0,0,0.2);  
}

.view:hover{
    background:#111;
    color:#fff;
}

.pro-cont {
    width: 88%;
    background: #fff;
    padding-left: 30px;
    padding-bottom: 30px;
    box-shadow: 0 0 30px rgba(0,0,0,0.2);
    border-radius: 10px;
    margin-top: 20px;

}

/* FOOTER */
footer {
    text-align: center;
    padding: 15px;
    background: black;
    color: white;
}




@media (max-width:768px) {

     .main-product-card {
    dispaly: grid;
    grid-template-colum: repeat(2,1fr);
    gap: 10px;
    }
    .desktop-view {
        display: none;
    }
    .mobile-view {
        display: flex;
        flex-direction: column;
        visibility: hidden;
        opacity: 0;
        transform: translateX(20px);
        transition: all 1s ease;

    }
    .hamburger-menu {
        display: flex;
    }
    .show {
        visibility: visible;
        opacity: 1;
        transform: translateX(0px);

    }

    .thumb {
    width: 50px;
    height: 50px;
    object-fit: cover;
    } 
}
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <header>
    <img class="logo-img" src="assets/nexora.jpg" alt="">   
        <nav class="desktop-view">
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">Categories</a>
            <a href="#">About Us</a>
        </nav>
        <div class="icon-menu">
        <div class="head-icons">
           <i class="fa-solid fa-cart-arrow-down"></i>
           <i class="fa-solid fa-user"></i>
        </div> 
        <div class="hamburger-menu">
            <span class="menu"></span>
            <span class="menu"></span>
            <span class="menu"></span>
        </div>
        </div>
        <nav class="mobile-view">
            <img  class="menu-img" src="assets/nexora.jpg" alt="">
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">Categories</a>
            <a href="#">About Us</a>
        </nav>
    </header>

     <!-- IMAGES -->
     <section class="main-images">
    <div class="product-gallery">
        <img src="assets/mon.jpg" alt="" class="main-image">
        <div  class="thumbnails">
            <img src="assets/deco.jpg" alt="" class="thumb">
            <img src="assets/fabric.jpg" alt="" class="thumb">
            <img src="assets/hero.jpg" alt="" class="thumb">
            <img src="assets/mon.jpg" alt="" class="thumb">
            <img src="assets/nexora.jpg" alt="" class="thumb">
        </div>
    </div>
   

     <!-- PRODUCT DETAILS -->

     <div class="product-details" >
         <div class="main-product">
            <h4 class="product-det">Product Name</h4>
             <p class="pro-duct">atampa</p>
             <span class="details-line"></span>
            <h4 class="product-det">Category</h4>
            <p class="pro-duct">lace</p>
            <span class="details-line"></span>
            <h4 class="product-det">Colour</h4>
            <p class="pro-duct">blue</p>
            <span class="details-line"></span>
            <h4 class="product-det">Description</h4>
            <p class="pro-duct">original</p>
            <span class="details-line"></span>
            <h4 class="pro-price">Price:</h4>
            <p class="price-price">$4000</p>

         </div>
        </div>

        <!-- SELLER DETAILS -->

          <div class="seller-details">
          <h4 class="product-det">Seller Details</h4>
           <span class="details-line"></span>
           <p  class="pro-duct">Shop Name:</p>
           <p class="pro-duct">Address:</p>
           <span class="details-line"></span>
           <a class="see" href="">See More Products From This Seller</a>
           <h4 class="product-deta">Contact Seller</h4>
           <div class="contact-seller">
           <a class="whatsapp-link" href=""><i class="fa-brands fa-whatsapp"></i></a>
           <a  class="phone-link" href=""><i class="fa-solid fa-phone"></i></a>
           </div>
           
           <div class="contact-seller">
            <p class="pro-duct">whatsapp</p>
            <p class="pro-duct">Phone Call</p>
           </div>
           </div>

           <!-- OTHER PRODUCT YOU MAY LIKE -->
           <div class="pro-cont">
           <section class="product-hero">
        <div class="feature">    
        <h1>Related Products</h1>
        <img class="product-img" src="assets/deco.jpg" alt="">
        </div>
        <div class="main-product-card">
       <div class="product-card">

       <img src="assets/lace.jpg" alt="Fabric">

       <div class="product-content">
         <div class="fabric-wishlist">
        <p class="category">Fabric</p>
        <a  class="wishlist" href=""><i class="fa-solid fa-cart-shopping"></i></a>
         </div>
        <h3>Luxury Ankara Fabric</h3>

        <div class="price">
            <span class="current">₦18,500</span>
        </div>

        <div class="shopper">
            <span class="shop-from">From:</span>
        </div>

        <div class="buttons">
           <a class="view" href="product.php">View Details <i class="fa-solid fa-eye"></i> </a>
        </div>

     </div>
     </div>
    </div>
    </section>
    </div>

    </section>

     <!-- FOOTER -->
    <footer>
        <p>© 2026 Nexore. All rights reserved.</p>
    </footer>
     
    <script>
        const menuBtn = document.querySelector(".hamburger-menu");
        const mobileView = document.querySelector(".mobile-view");
    
        menuBtn.addEventListener("click", function () {
        mobileView.classList.toggle("show");
        });

        const mainImage = document.querySelector(".main-image");
        const thumbNails = document.querySelectorAll(".thumb");

        thumbNails.forEach(function(thumbNail){
         
        thumbNail.addEventListener("click", function(){
            mainImage.src = thumbNail.src; 
            
             thumbNails.forEach(function(img) {
                img.classList.remove("active");
             });

            thumbNail.classList.add("active");
        });
        });



    </script>

</body>
</html>