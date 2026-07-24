<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/cab2e38d8c.js" crossorigin="anonymous"></script>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexore - Modern Marketplace</title>
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

/* HERO */
.hero {
    height: 600px;
    background: url(assets/hero.jpg) no-repeat center center/cover;
    color: white;
    display: flex;
    transform: translateY(-100px);
    margin: 0px;
   
   
}

.hero-text {
    display: flex;
    margin-top:150px;
    flex-direction: column;
    margin-left: 30px;
    text-align: left;
   
  

}

.tt {
   color: #B8860B;  
}

.hero-p {
    color: #B8860B;
     font-weight: 400;
    margin-top: 15px;
     font-family: lora;


}

.hero-h3 {
    color: #ffffff;
     font-weight: 800;
      font-family: lora;
       font-size: 30px;
    margin: 3px;

}

.hero-h1 {
    color: #ffffff;
    font-weight: bold;
    font-size: 40px;
    font-family: poppins;
    margin: 7px;

}

/*product*/

.product-hero {
    position: relative;
    top: -70px;
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

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-text">
        <h1 class="hero-h1">Welcome <span class="tt">to Nexore</span></h1>
        <h3  class="hero-h3">Where Quality Meets Elegance</h3>
        <p class="hero-p">Discover the finest collection of fabrics, shoes, bags and <br> more for every occasion and creation.</p>
           <div class="search-main">
            <input  class="search" type="text" placeholder="search ..............." name="search"> 
           <i class="fa-solid fa-magnifying-glass"></i>
        </div>  
        </div>
    </section>
    
    <section class="product-hero">
        <div class="feature">    
        <h1>Featured Products</h1>
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
 

    <!-- FOOTER -->
    <footer>
        <p>© 2026 Nexore. All rights reserved.</p>
    </footer>

    <script>
        const menuBtn = document.querySelector(".hamburger-menu");
        const mobileView = document.querySelector(".mobile-view");
    
        menuBtn.addEventListener("click", function () {
        mobileView.classList.toggle("show");
        })

    </script>

</body>
</html>
</body>
</html>