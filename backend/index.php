<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAJABOR</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="img/car.gif" alt=""></a>
        <i id="menu-icon" class="bx bx-menu"></i> <!-- ADDED ID for the menu icon -->
        
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#contact us">Contact Us</a></li>
        </ul>
    <div class="header-btn">
        <a href="#" class="Register">Register host</a>
        <a href="signin.php" class="sign-up">Sign in</a>
    </div>
    </header>
    <section class="home" id="home">
        
        <div class="welcome-text">
            <span class="welcome">Welcome</span> <br>
            <span class="to"> To</span><br>
            <span class="site-name">JAJABOR</span><br>
            <span class="description">"Where every journey begins with the perfect ride"</span>
        </div>
        
        
        <div class="text">
            <h1><span>Looking</span> for <br>rent a car or bike</h1>
            <p>Whether you need a car for business travel, a bike for city exploration, or a vehicle for a weekend getaway, JAJABOR offers a seamless and reliable rental experience. Choose from a wide range of well-maintained vehicles tailored to your needs.
                <div class="app-images">
                    <img src="img/ios.png" alt="">
                    <img src="img/512x512.png" alt=""></div>

                
            </div>
        </div>
        <div class="form-container">
            <form action="">
                <div class="input-box">
                <span>Location</span>
                <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
        
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
        
                <input type="submit" value="Submit" class="btn">
</form>
        
    </section>
    <!--Ride Section-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Rent with 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
        <div class="box">
            <i class='bx bxs-map' ></i>
            <h2>Choose a location</h2>
            <p>Select the city or area where you want to rent a vehicle. Browse through available options and pick the one that suits your needs.</p>
        </div>
        
        <div class="box">
            <i class='bx bxs-calendar' ></i>
            <h2>Pick-Up Date</h2>
            <p>Choose your preferred rental start date and duration. Ensure availability and confirm your booking for a hassle-free experience.</p>
        </div>
        
        <div class="box">
            <i class='bx bxs-car' ></i>
            <h2>Book A Vehicle</h2>
            <p>Complete your reservation by providing necessary details and making a payment. Get ready to hit the road with your chosen car or bike!</p>
        </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out The Top Deals<br>From Top Rated Dealers</h1>
        </div>
    </section>
    <div class="toggle-buttons">
        <button onclick="showCategory('car')" class="btn active" id="car-btn">Car</button>
        <button onclick="showCategory('bike')" class="btn" id="bike-btn">Bike</button>
    </div>
    
    <div class="search-filter-container">
        <div class="filter-group">
            <input type="text" id="search-bar" placeholder="Search vehicle..." onkeyup="searchVehicle()">
        </div>
        
        <div class="filter-group">
            <select id="type-filter" onchange="filterVehicles()">
                <option value="all">All Types</option>
                <option value="car">Car</option>
                <option value="bike">Bike</option>
            </select>
        
            <select id="brand-filter" onchange="filterVehicles()">
                <option value="all">All Brands</option>
                <option value="Mahindra">Mahindra</option>
                <option value="Toyota">Toyota</option>
                <option value="Royal Enfield">Royal Enfield</option>
                <option value="Yamaha">Yamaha</option>
            </select>
        </div>
        
        <div class="filter-group price-group">
            <input type="range" id="price-filter" min="500" max="2000" step="100" value="2000" oninput="updatePrice()">
            <span id="price-value">₹2000</span>
        </div>
    </div>
    

    <!-- Cars Section -->
    <div id="car-section">
    <div class="services-container">
        
        <div class="box">
            <div class="box-img">
                <img src="img/scorpioscorpiorightfrontthreequarter.jpeg" alt="Car Image" class="car-image">
            </div>
            <p>2025</p>
            <h3>Mahindra Scorpio</h3>
            <h2>₹2000<span>/day</span></h2>
            <a href="javascript:void(0);" class="btn rent-now">Rent Now</a>
        </div>
        
            <div class="box">
            <div class="box-img">
                <img src="img/maruti suzuki.jpeg" alt="Car Image" class="car-image">
            </div>
            <p>2025</p>
            <h3>Maruti Suzuki</h3>
            <h2>₹1500<span>/day</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
        
            <div class="box">
            <div class="box-img">
                <img src="img/innova-crysta-exterior-right-front-three-quarter-2.webp" alt="Car Image" class="car-image">
            </div>
            <p>2025</p>
            <h3>Toyota Innova</h3>
            <h2>₹1500<span>/day</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

    </div>
    </div>


    <!-- Bikes Section (Initially Hidden) -->
    <div id="bike-section" style="display: none;">
        <div class="services-container">
            <div class="box">
            <div class="box-img">
                <img src="img/royal enfield.jpeg" alt="Bike Image" class="car-image">
            </div>
            <p>2024</p>
            <h3>Royal Enfield Classic</h3>
            <h2>₹800<span>/day</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="img/yamaha.jpeg" alt="Bike Image" class="car-image">
            </div>
            <p>2024</p>
            <h3>Yamaha R15</h3>
            <h2>₹900<span>/day</span></h2>
            <a href="#" class="btn">Rent Now</a>
        </div>
    </div>
</div>

    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Welcome to JAJABOR, your trusted destination for hassle-free car and bike rentals. Whether you need a stylish car for a weekend getaway or a fuel-efficient bike for your daily commute, we've got you covered. Our platform offers a seamless booking experience, competitive pricing, and a diverse range of vehicles to suit your needs.

                    At JAJABOR, we prioritize customer satisfaction, ensuring all our vehicles are well-maintained, clean, and ready for the road. With flexible rental plans and a dedicated support team, we make your journey smooth and enjoyable. Choose us for a reliable, affordable, and convenient rental experience!</p>
                <a href="#" class="btn">Learn More</a>
          </div>
        </div>
    </section>
    <!---Reviews-->
    <section class="reviews" id="reviews"> <div class="heading">
        <span>Reviews</span>
        <h1>Know What our Customer Say</h1>
    </div>
<div class="reviews-container">
    <div class="box">
        <div class="rev-img">
            <img src="img/khushi.jpg" alt="">
        </div>
        <h2>Khushi</h2>
        <div class="stars">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star' ></i>
        </div>
        <p>"Had an amazing experience renting a bike for my weekend trip! The booking process was seamless, and the bike was in top-notch condition. Highly recommend!"</p>
    </div>


<div class="box">
    <div class="rev-img">
        <img src="img/shyaman.jpg" alt="">
    </div>
    <h2>Shyaman</h2>
    <div class="stars">
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bx-star' ></i>
    </div>
    <p>"Great service and well-maintained cars! The rental rates were reasonable, and the support team was very responsive. Only wish the pick-up process was a bit faster."</p>
</div>
    <div class="box">
        <div class="rev-img">
            <img src="img/rimi.jpg" alt="">
        </div>
        <h2>Rimi</h2>
        <div class="stars">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star' ></i>
            <i class='bx bx-star' ></i>
        </div>
    <p>Rented a car for a family vacation, and it was a smooth ride throughout. Hassle-free pickup and return process. Will definitely rent again!"</p>
</div>
    </section>
    <!--Newsletter-->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter Your Email...">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    <div class="copyright">
<p>&#169; CarpoolVenom All Right Reserved
</p>
<div class="social">
    <a href="#"><i class='bx bxl-facebook' ></i></a>
    <a href="#"><i class='bx bxl-twitter' ></i></a>
    <a href="#"><i class='bx bxl-instagram' ></i></a>
</div>
    </div>
   
    <div id="overlay"></div>
    
    <!-- JavaScript -->
    
    <script src="https://unpkg.com/scrollreveal" ></script>
   <script src="script.js"></script>



</body>
</html>