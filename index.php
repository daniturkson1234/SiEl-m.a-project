<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si-El M.A</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
    <section class="bg-img" style="position: relative; z-index:1;"></section>
    <section class="main" id="main">
        <nav>
            <a href="" style="margin-left:-50px;">
                <img style="display: flex; margin-right: 320px; z-index:3; margin-top: -60px; margin-left:5px;" width="150" height="130px" src="./images/logo.png" alt="">
            </a>

            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a data-scroll href="#feature">Features</a></li>
                <li><a data-scroll="" href="#about">About Us</a></li>
                <li><a data-scroll="" href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading" style="margin-top: 40px;">
            <h1>Building a relatonship with Customers</h1>
            <p>Prioritizing the satisfaction of needs and assurance of all clients and customers worldwide. The agency you can trust.</p>
            <a data-scroll="" href="#footer" class="main-btn">Contact</a>
        </div>
    </section>
    <section class="features" id="feature">
        <div class="feature-container">
        <div class="feature-box">
                <div class="f-img">
                    <img src="./images/php3.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Digital Marketing</h4>
                    <p>Growing sales through advertising</p>
                    <a href="" class="main-btn">Check</a>
                </div>
            </div>    
        
            <div class="feature-box">
                <div class="f-img">
                    <img src="./images/php8.jpeg" alt="">
                </div>
                <div class="f-text">
                    <h4>Tracking Your stocks</h4>
                    <p>Building your business structure</p>
                    <a href="" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="./images/php1.jpeg" alt="">
                </div>
                <div class="f-text">
                    <h4>Satisfying Customer needs</h4>
                    <p>Meeting the needs of customers</p>
                    <a href="" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-img">
            <img src="./images/php4.jpeg" alt="">
        </div>
        <div class="about-text">
            <h2>Taking product marketing to the next level</h2>
            <p>Anticipating the growth of your product in the modern era of marketing and trade with customers needs in view.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>All comments and suggestions can be shared in the form below. Your view is our number one priority.</p>
        </div>
        <form action="process.php" method="POST">
            <input type="text" id="username" name="username" placeholder="Your Full Name" required>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <textarea name="message" id="message" placeholder="Type your message here............" required></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>

        </form>
    </section>

    <section id="footer" style="background-color: #abb4b4; height: 200px;">
        <div class="container">
            <footer class="d-flex flex-wrap border-top">
                <div class=" d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <div style="color: white; margin-left: 30px;">
                        <label style="text-transform: uppercase; font-size: 20px;">For more Information :</label>
                        <ul style="color: white; list-style: none;">
                            <li style="margin-bottom: 10px;">Email: sielma1967@gmail.com</li>
                            <li style="margin-bottom: 10px;">Tel: +1(804) 838 0974 / +1(804) 838 0975</li>
                            <li>Digital-  Address: PA-19 greenfield-avenue</li>
                        </ul>
                    </div>
                    <div>
                        <span style="float:right; color: black; margin-right: 70px;">&copy; 2022 Company, Inc</span>
                    </div>
                </div>

            </footer>
        </div>
    </section>
 
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', { speed: 300});
    </script>
    <script src="path/to/smooth-scroll.polyfills.min.js"></script>
</body>
</html>