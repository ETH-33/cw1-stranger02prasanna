<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f257b9379.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/card.css">
    <title>Dashboard</title>
</head>
<body>  
    <nav class="navbar bg-dark">
        <div class="container">
            <h1 class="logo">N.T</h1>
            <ul class="nav-items">
                <li class="nav-item"><a href="./index.php">Home</a></li>
                <li class="nav-item"><a href="./about.php">Services</a></li>
                <li class="nav-item"><a href="./dashboard.php">Dashboard</a></li>
            </ul>
        </div>
    </nav>
    <section class="about">
        <div class="container">
            <h2 class="lg-heading text-black about-heading">Our Services</h2>
            <div class="card-container">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="/img/chitwan.jpg" alt="chitwan" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Chitwan</h5>
                                <p>Price: $100</p>
                                <ul>
                                    <li>&#10004; Bed & Breakfast</li>
                                    <li>&#10004; Jungle Safari</li>
                                    <li>&#10004; Wetland Visit</li>
                                    <li>&#10004; Camping</li>
                                    <li>&#10004; Cultural Tharu Dance</li>
                                </ul>
                                <a href="cart.html" class="btn-add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="/img/nn.jpg" alt="chitwan" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Mayadevi</h5>
                                <p>Price: $130</p>
                                <ul>
                                    <li>&#10004; Bed & Breakfast</li>
                                     <li>&#10004; Museum Visit</li>
                                      <li>&#10004; Historical Site Visit</li>
                                      <li>&#10004; Meditation</li>
                                      <li>&#10004; Cultural Tharu Dance</li>
                                </ul>
                                <a href="cart.html" class="btn-add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="/img/pokhara.jpg" alt="chitwan" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Sarangkot</h5>
                                <p>Price: $100</p>
                                <ul>
                                    <li>&#10004; Bed & Breakfast</li>
                                     <li>&#10004; Boating</li>
                                     <li>&#10004; Paragliding</li>
                                    <li>&#10004; David Falls</li>
                                    <li>&#10004; Lake side view</li>
                                </ul>
                                <a href="cart.html" class="btn-add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Repeat the above four card elements for each row -->
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-twitter fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>
        </div>
        <p>Nepal Tour And Travels &copy; 2023, All Rights Reserved</p>
    </footer>
</body>
</html>