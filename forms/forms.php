<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <div id="navbar">
        <div id="nav-container">
            <!-- NAVIGATION BAR - LOGO BUTTON -->
            <div class="nav-left">
                <a id="logo" href="home.php">
                    <img src="imageholder/wma-logo.png" id="logo-img">
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
                    <button class="dropbtn">
                        Application
                    </button>
                    <div class="dropdown-content">
                        <a href="">How To Apply</a>
                        <a href="">Prerequisites</a>
                        <a href="">Recruitment Process</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn" onClick="location.href='../contact/contact.php'">
                        Contact Us
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- PAGE BODY -->
    <div class="container">
        <!-- FORM PROGRESS BAR -->
        <div class="progress">
            <div class="prog-number" id="prog1">1</div>
            <div class="prog-number" id="prog2">2</div>
            <div class="prog-number" id="prog3">3</div>
            <div class="prog-number" id="prog4">4</div>
            <div class="prog-number" id="prog5">5</div>
        </div>
        <!-- FORM BODY AND TABS -->
        <div class="subcontainer">
            <form action="" id="form" name="form">
                <!-- MULTI-STEP: FIRST TAB -->
                <div class="personal" id="personal">
                    <label id="personal-info">Personal Info *</label>
                    <label id="name-title">Name *</label>
                    <input 
                        placeholder="Given Name..." 
                        type="text" 
                        name="givenname" 
                        id="givenname"
                        onclick="validator()"
                        oninput="validator()"
                        required>
                    <input 
                        placeholder="Family Name..." 
                        type="text"
                        name="familyname" 
                        id="familyname"
                        onclick="validator(), tryThis()"
                        oninput="validator()">
                    <!-- -------------------------------------------- -->
                    <label id="address-title">Address *</label>
                    <input 
                        placeholder="Address..." 
                        type="text" 
                        name="address" 
                        id="address"
                        onclick="validator()"
                        oninput="validator()">
                    <input 
                        placeholder="Country..." 
                        type="text" 
                        name="country" 
                        id="country"
                        onclick="validator()"
                        oninput="validator()">
                    <input 
                        placeholder="Province / State..." 
                        type="text" 
                        name="state" 
                        id="state"
                        onclick="validator()"
                        oninput="validator()">
                </div>

                <!-- MULTI-STEP: SECOND TAB -->
                <div class="contact" id="contact">
                    <label id="contact-info">Contact Info *</label>
                    <label id="contact-title">Contacts *</label>
                    <input 
                        placeholder="Phone Number..." 
                        type="text" 
                        name="phone1" 
                        id="phone1">
                    <input 
                        placeholder="Back-Up Phone..." 
                        type="text" 
                        name="backup" 
                        id="backup">
                    <input 
                        placeholder="Email Address..." 
                        type="email" 
                        name="email" 
                        id="email">
                    <!-- -------------------------------------------- -->
                    <label id="socmed-title">Social Media *</label>
                    <input 
                        placeholder="Facebook Profile Link" 
                        type="text" 
                        name="facebook" 
                        id="facebook">
                    <input 
                        placeholder="Instagram Profile Link" 
                        type="text" 
                        name="instagram" 
                        id="instagram">
                    <input 
                        placeholder="Twitter Profile Link" 
                        type="text" 
                        name="twitter" 
                        id="twitter">
                    <input 
                        placeholder="LinkedIn Profile Link" 
                        type="text" 
                        name="linkedin" 
                        id="linkedin">
                </div>

                <!-- MULTI-STEP: THIRD TAB -->
                <div class="education" id="education">
                    <label id="education-info">Education *</label>
                    <input 
                        placeholder="School Name..." 
                        type="text" 
                        name="schoolname"  
                        id="schoolname">
                    <select name="level" id="level" form="form">
                        <option hidden disabled selected value>Educational Attainment</option>
                        <option value="associate">Associate's Degree</option>
                        <option value="bachelor">Bachelor's Degree</option>
                        <option value="master">Master's Degree</option>
                        <option value="doctoral">Doctoral Degree</option>
                        <option value="licensed">Licensed</option>
                    </select>
                    <input 
                        placeholder="School Address..." 
                        type="text" 
                        name="schooladdress"  
                        id="schooladdress">
                    <textarea name="educ-desc" id="educ-desc" cols="30" rows="10" placeholder="Description"></textarea>
                    <label id="start-date">Start date *</label>
                    <label id="end-date">End date *</label>     
                    <div class="dateholder">
                        <select name="start-year" id="start-year">
                            <option hidden disabled selected value>Year</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        <select name="start-month" id="start-month">
                            <option hidden disabled selected value>Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>

                        <select name="start-year" id="start-year">
                            <option hidden disabled selected value>Year</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        <select name="start-month" id="start-month">
                            <option hidden disabled selected value>Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>

                    </div>
                </div>
                
                <!-- MULTI-STEP: FOURTH TAB -->
                <div class="upload" id="upload">
                    <label id="upload-info">DOCUMENT UPLOAD *</label>

                    <div class="resume-box">
                        <label id="resume-title">Resume *</label>
                        <label for="resume" class="resume-input">
                            RESUME UPLOAD
                            <input type="file" name="resume" id="resume">
                        </label>
                    </div>
                    <div class="cover-box">
                        <label id="cover-title">Cover Letter *</label>
                        <label for="cover" class="cover-input">
                            COVER LETTER
                            <input type="file" name="cover" id="cover">
                        </label>
                    </div>
                    <div class="passport-box">
                        <label id="passport-title">Passport ID *</label>
                        <label for="passport" class="passport-input">
                            PASSPORT UPLOAD
                            <input type="file" name="passport" id="passport">
                        </label>
                    </div>
                    <div class="valid-box">
                        <label id="valid-title">Valid ID *</label>
                        <label for="valid" class="valid-input">
                            VALID ID
                            <input type="file" name="valid" id="valid">
                        </label>
                    </div>

                </div>

                <!-- MULTI-STEP: FIFTH TAB -->
                <div class="agreement" id="agreement">
                    <label id="agreement-info">TERMS AND AGGREEMENTS *</label>
                </div>

                <!-- -------------------------------------------- -->

                <div class="button" id="button">
                    <button type="button" onclick="prevbtn()" id="prev" disabled>Previous</button>
                    <button type="button" onclick="nextbtn()" id="next" disabled>Next</button>
                </div>
            </form>
        </div>
    </div>
    <!-- ------------------------------------- -->
    <!-- FOOTER BAR -->
    <footer>
        <div class="foot-container">
            <div class="foot-subcontainer">
                <div class="left-foot">
                    <div class="foot-logo">
                        <a href="home.php">
                            <i class="fa-solid fa-globe"></i>
                            LOGO
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                    </div>
                    <div class="foot-reserve">
                        <p>
                            © (YEAR) West Migration Agency
                            All Rights Reserved
                        </p>
                    </div>
                </div>

                <div class="page-buttons">
                    <a href="#home">
                        ABOUT US
                    </a>
                    <a href="#home">
                        CONTACT US
                    </a>
                    <a href="#home">
                        REQUIREMENTS
                    </a>
                    <a href="#home">
                        DISCLAIMER
                    </a>
                </div>

                <div class="socials">
                    <div class="socials-title">
                        <h2>Check us out!</h2>
                    </div>
                    <div class="socials-container">
                        <a href="#" id="socialButton1">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" id="socialButton2">
                            <i class="fa-brands fa-twitter"></i>
                        </a>

                        <a href="#" id="socialButton3">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" id="socialButton4">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                        <a href="#" id="socialButton5">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="forms.js"></script> 
</html>