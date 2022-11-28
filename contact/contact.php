<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <div id="navbar">
        <div id="nav-container">
            <!-- NAVIGATION BAR - LOGO BUTTON -->
            <div class="nav-left">
                <a id="logo" href="https://westmigrationagency.com/">
                    <img src="../photos/wma-logo.png" id="logo-img">
                </a>
            </div>

            <div class="nav-right">
                <!-- NAVIGATION BAR - HOVER BUTTONS -->
                <div class="dropdown">
                    <button class="dropbtn">
                        About Us
                    </button>
                    <div class="dropdown-content">
                        <a href="../company/company.php">
                            Our Company
                        </a>
                        <a href="../company2/company2.php">
                            Specializations
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn" onClick="location.href='../application/application.php'">
                        Application
                    </button>
                </div>

                <div class="dropdown">
                    <button class="dropbtn" onClick="location.href='../contact/contact.php'">
                        Contact Us
                    </button>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <header>
            <div class="content_title">
                <h1>Connect with US!</h1>
            </div>
        </header>
        <section>
            <div class="content">
                <div class="left">
                    <div>
                        <h1>Company Number:</h1>
                        <p>415-633-6865</p>
                    </div>
                    <div>
                        <h1>Company Email:</h1>
                        <p>admin@westmigrationagency.us</p>
                    </div>
                </div>
                <div class="right">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="90%" id="iframe" src="https://maps.google.com/maps?q=3400%20COTTAGE%20WAY%20STE,%20CA%2095825&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <a href="https://fmovies-online.net"></a>
                        <br>
                        <a href="https://www.embedgooglemap.net">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER BAR -->
    <footer>
        <div class="foot-container">
            <div class="foot-subcontainer">
                <!-- LOGO SECTION -->
                <div class="left-foot">
                    <div class="foot-logo">
                        <a id="foot-logo" href="https://westmigrationagency.com/">
                            <img src="../photos/wma-logo.png" id="logo-img">
                        </a>
                        <p>
                            © (YEAR) West Migration Agency
                            All Rights Reserved
                        </p>
                    </div>
                </div>

                <!-- PAGE BUTTON SECTION -->
                <div class="mid-foot">
                    <div class="page-buttons">
                        <a href="../company/company.php">
                            ABOUT US
                        </a>
                        <a href="../contact/contact.php">
                            CONTACT US
                        </a>
                        <a href="../application/application.php">
                            REQUIREMENTS
                        </a>
                    </div>
                </div>

                <!-- SOCIAL MEDIA BUTTONS -->
                <div class="socials">
                    <!-- <div class="socials-title">
                        <h2>Check us out!</h2>
                    </div> -->
                    <div class="socials-container">
                        <div>
                            <a href="https://www.facebook.com/profile.php?id=100087001537840" id="socialButton1">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" id="socialButton3">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="email_button">
                            <button id="socialButton5" onclick="copyToClipboard()">
                                <i class="fa-solid fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>