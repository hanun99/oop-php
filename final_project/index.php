<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel = "icon" href ="img/F.png" type = "image/x-icon">
    <title>furniturIn</title>
</head>
    <body>
        <!-- header diks -->  
        <header class>
            <a href="#" class="logo">furnitur<span>In</span></a>
            <i id="menu-icon"  class="fa-solid fa-bars"></i>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#shop">Shop Now</a></li>
            </ul>

            <a href="register.php" class="btn">Register</a>
        </header> 

        <!-- homenya diks -->
        <section class="home" id="home">
            <div class="home-text">
                <h4>Welcome to</h4>  
                <h1>furnitur<span>In</span></h1>
                <h3>Quality is our <span>Priority</span></h3>
                <img src="img/Group 12.png">
            </div>
        </section>

        <!-- aboutnya diks -->
        <section class="about" id="about">
            <div class="abt-text">
                <h2>About <span>Us</span></h2>
                <h5>Luxurious <span>Furniture</span> Shop</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br>et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img src="img/Group 11.png">
            </div>
        </section>

     <!-- shop now nya diks -->
    <section class="shop" id="shop">
        <div class="center">
            <h2>Shop <span>Now</span></h2>
            <p>Check out our newest product this year</p>
        </div>

        <div class="searching">
            <form method="POST" action="search.php">
                <div class="form-inline">
                    <input type="text" class="form-control" name="keyword" placeholder="Search here" required="required"/>
                    <button class="btn btn-success" name="search" style="border: none;">Search</button>
                </div>
            </form>
            <br>
        </div>

        <div class="shop-content">
            <div class="row">
                <img src="img/Group 13.png">
                <h3>PARUP</h3>
                <p>sofa 2 dudukan, Vissle abu-abu</p>
                <h2>Rp5.395.000</h2>
                <a href="first.php"></a>
            </div>

            <div class="row">
                <img src="img/Group 14.png">
                <h3>EKTORP</h3>
                <p>sofa 3 dudukan, Hallarp krem</p>
                <h2>Rp6.795.000</h2>
                <a href="second.php"></a>
            </div>

            <div class="row">
                <img src="img/Group 15.png">
                <h3>KIVIK</h3>
                <p>sofa 2 dudukan, Gunnared krem</p>
                <h2>Rp8.795.000</h2>
                <a href="third.php"></a>
            </div>

            <div class="row">
                <img src="img/Group 16.png">
                <h3>SODERHAMN</h3>
                <p>sofa 3 dudukan, dengan ujung terbuka/Viarp krem/cokelat</p>
                <h2>Rp10.490.000</h2>
                <a href="forth.php"></a>
            </div>

            <div class="row">
                <img src="img/Group 17.png">
                <h3>KLIPPAN</h3>
                <p>sofa 2 dudukan, Bomstad hitam</p>
                <h2>Rp4.995.000</h2>
                <a href="fifth.php"></a>
            </div>

            <div class="row">
                <img src="img/Group 18.png">
                <h3>HEMLINGBY</h3>
                <p>sofa 2 dudukan, Bomstad hitam</p>
                <h2>Rp2.995.000</h2>
                <a href="sixth.php"></a>
            </div>
        </div>
    </section>

     <!-- footer diks -->
     <div class="footer">
        <p>Copyright © 2022 <span class="furnitur" style="color: white;">furnitur</span><span>In</span> corp. All Rights Reserved.</p>
     </div>

     <!-- js diks -->
     <script>
        const header = document.querySelector("header");
        window.addEventListener ("scroll", function() {
            header.classList.toggle("sticky", window.scrollY > 0);
        });
     </script>
    </body>
</html>


