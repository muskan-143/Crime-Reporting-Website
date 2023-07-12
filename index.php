<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crime Report</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- custom js file link  -->
    <script src="js/index2.js" defer></script>
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo" style="color:cyan">
            Crime Reports
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
            <!-- <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a> -->
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
            <!-- <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a> -->
            <!-- <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a> -->
        </nav>


        <div class="dropdown">
            <button class="dropbtn" data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form"
                class="btn dropDown">Login</button>
            <div class="dropdown-content">
                <a href="html/finalAdmin/adminPHP/index.php" target="_blank">Admin</a>
                <a href="html/PoliceHtml/policeLoginPage.php" target="_blank">Police</a>
                <a href="html/userHTML/userLogin.php" target="_blank">User</a>
            </div>
        </div> >
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <!-- <span data-aos="fade-up" data-aos-delay="150">Lorem ipsum dolor sit.</span> -->
            <h1 data-aos="fade-up" data-aos-delay="300" style="color:blue">Crime reporting System</h1>
            <p data-aos="fade-up" data-aos-delay="450" style="font-size: 17px;">
                Criminals despise security, but we don’t. Silence breeds violence.<br>
                Abuse must be avoided. Don’t apologize.
            </p>
            <a data-aos="fade-up" data-aos-delay="600" href="https://cybercrime.gov.in/" target="_blank"
                class="btn">Explore More</a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- booking form section starts  -->

    <section class="book-form" id="book-form">
        <center>
            <h1 data-aos="zoom-in" data-aos-delay="150" style="color:cyan">Technical Issue Report here</h1>
        </center>
        <br>
        <form action="">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <span>Name</span>
                <input type="text" placeholder="Enter your name" value="" />
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <span>Email</span>
                <input type="email" value="" placeholder="Enter your email" />
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <span>Contact</span>
                <input type="phone" placeholder="Enter your contact" value="" />
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Submit" class="btn" />
        </form>
    </section>

    <!-- booking form section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <img src="images/backgroundImage2.jpg" id="reportwhy">
        </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <span>Why to Report Crime?</span>
            <h3>Understand important of reporting crime</h3>
            <p>
                You can play an important part in helping to keep yourself, your loved ones and community safe by
                reporting crimes committed against you or someone else.<br>
                By sharing information you have about a crime that has or may be committed or about someone involved in
                committing a crime<br> You may help the police solve crimes and help prevent future crimes from taking
                place.
            </p>
            <a href="https://www2.gov.bc.ca/gov/content/justice/criminal-justice/bcs-criminal-justice-system/reporting-a-crime/why-report-a-crime#:~:text=Importance%20of%20Reporting%20a%20Crime%201%20You%20or,chance%20of%20arresting%20the%20person%20responsible%20More%20items"
                class="btn" target="_blank">read more</a>
        </div>
    </section>


    <section class="services" id="services">
        <div class="heading">
            <h1 style="color:cyan">Our services</h1>
            <!-- <h1>countless expericences</h1> -->
        </div>

        <div class="box-container">
            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <!-- <i class="fa fa-glasses"></i> -->
                <h3>View criminal</h3>
                <p>
                    You need to know what around your location.Understand that there is need to know the criminal in
                    your location
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <!-- <i class="fa fa-triangle-exclamation"></i> -->
                <h3>Report Problem</h3>
                <p>
                    Report your problem so that we can try the best to solve it.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <!-- <i class="fas fa-utensils"></i> -->
                <h3>Permission Request</h3>
                <p>
                    You can ask for the permission and get the response as early as possible
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <!-- <i class="fas fa-hotel"></i> -->
                <h3>Problem</h3>
                <p>
                    Any technical issue give us the feedback about it.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <!-- <i class="fas fa-wallet"></i> -->
                <h3>Contact Police</h3>
                <p>
                    The police officer provide there services in the best possible way.
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <!-- <i class="fas fa-headset"></i> -->
                <h3>24/7 support</h3>
                <p>
                    We are available 24/7 to help you
                </p>
            </div>
        </div>
    </section>

    <!-- review section starts  -->

    <section class="review">
        <div class="content" data-aos="fade-right" data-aos-delay="300">
            <span>testimonials</span>
            <h3>review of the User</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium corporis fugiat quae unde
                perspiciatis similique ab modi enim consequatur aperiam cumque distinctio facilis sit, debitis possimus
                asperiores non harum.
            </p>
        </div>

        <div class="box-container" data-aos="fade-left" data-aos-delay="600">
            <div class="box">
                <p>
                    Satisfied by the website as it is easy to use and understand no complication is required.
                </p>
                <div class="user">
                    <img src="images/pic-1.png" alt="" />
                    <div class="info">
                        <h3>Tushar Aherwar</h3>

                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    The complaint status help us to understand about the complaint.
                </p>
                <div class="user">
                    <img src="images/pic-2.png" alt="" />
                    <div class="info">
                        <h3>Janvi Roy</h3>

                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    We were able to see the status of the complaint.
                </p>
                <div class="user">
                    <img src="images/pic-3.png" alt="" />
                    <div class="info">
                        <h3>Tushar</h3>

                    </div>
                </div>
            </div>
            <div class="box">
                <p>
                    Website is easy to use and help for reporting the crime from home
                </p>
                <div class="user">
                    <img src="images/pic-4.png" alt="" />
                    <div class="info">
                        <h3>john deo</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="banner">
        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>Let's unite and try to stop crime</span>
            <h3>Report it </h3>
            <p>
                We are not required to stay quite only think we need to do is report it so that we can help the
                government to take the action.
            </p>
            <!-- <a href="#book-form" class="btn">book now</a> -->
        </div>
    </div>



    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo">
                    <i class="fas fa-paper-plane"></i>Crime Reporting
                </a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?
                </p>
                <div class="share">
                    <a href="https://www.facebook.com" class="fab fa-facebook-f" target="_blank"></a>
                    <a href="https://www.twitter.com" class="fab fa-twitter" target="_blank"></a>
                    <a href="https://www.instagram.com" class="fab fa-instagram" target="_blank"></a>
                    <a href="https://www.linkedin.com" class="fab fa-linkedin" target="_blank"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="#home" class="links">
                    <i class="fas fa-arrow-right"></i> home
                </a>
                <a href="#about" class="links">
                    <i class="fas fa-arrow-right"></i> about
                </a>
                <a href="#services" class="links">
                    <i class="fas fa-arrow-right"></i> services
                </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p><i class="fas fa-map"></i> mumbai, india</p>
                <p><i class="fas fa-phone"></i> +123-456-7890</p>
                <p><i class="fas fa-envelope"></i> muskanaherwar30@gmail.com</p>
                <p><i class="fas fa-clock"></i> 24/7</p>
            </div>


        </div>
    </section>

    <div class="credit">
        created by <span>Muskan Aherwar</span> | all rights reserved!
    </div>

    <!-- footer section ends -->

    <script src="js/index2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>
</body>

</html>