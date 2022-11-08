<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apply.css">
    <script src="apply.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Interest Form</title>
</head>
<body onload="hidefield()">
<!-- ------------------------------------- -->
    <!-- NAVIGATION BAR -->
    <div id="navbar">
        <div id="nav-container">
            <!-- NAVIGATION BAR - LOGO BUTTON -->
            <div class="nav-left">
                <a id="logo" href="../home/home.php">
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
    <!-- method="POST" action="https://sheetdb.io/api/v1/6i47rkeakcytk" id="sheetdb-form" name="myForm" onSubmit="return validate()" -->
<!-- ------------------------------------- -->
    <!-- SECTION BAR -->
    <section>
        <div class="container">
            <form name="myForm" method="POST" onSubmit="return validate()">
                <div class="personal_tab">
                    <label id="personal-info">1. Personal Info *</label>
                    <label id="name-title">Name *</label>
                    <input 
                        placeholder="Given Name..." 
                        type="text" 
                        name="givenname" 
                        id="givenname">
                    <input 
                        placeholder="Family Name..." 
                        type="text"
                        name="familyname" 
                        id="familyname">
                    <!-- -------------------------------------------- -->
                    <label id="address-title">Address *</label>
                    <input 
                        placeholder="Address..." 
                        type="text" 
                        name="address" 
                        id="address">
                    <input 
                        placeholder="Country..." 
                        type="text" 
                        name="country" 
                        id="country">
                    <input 
                        placeholder="Province / State..." 
                        type="text" 
                        name="state" 
                        id="state">
                </div>

                <div class="contact_tab">
                    <label id="contact-info">2. Contact Info *</label>
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
                        id="backup"
                        value="N/A">
                    <input 
                        placeholder="Email Address..." 
                        type="email" 
                        name="email" 
                        id="email">
                </div>

                <div class="interest_tab">
                    <label id="contact-info">3. Interest Form *</label>
                    <label id="contact-title">Current Profession *</label>

                    <div class="profession">
                        <select id="profession" name="profession" onchange="showfield(this.options[this.selectedIndex].value)">
                            <option disabled selected hidden>Choose Profession</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Physician">Physician</option>
                            <option value="Professor or Research Scholar">Professor or Research Scholar</option>
                            <option value="Short-term Scholar">Short-term Scholar</option>
                            <option value="Student: College/University">Student: College/University</option>
                            <option value="Trainee">Trainee</option>
                            <option value="Au Pair/Educare">Au Pair/Educare</option>
                            <option value="Specialist">Specialist</option>
                            <option value="Intern">Intern</option>
                            <option value="Other" id="other">Other</option>
                        </select>
                        <div id="div1">If Other: <input type="text" name="other_option" id="other_option" onchange="change()"/>
                        </div>
                    </div>

                    <div class="eligibility">
                        <label id="eligibility-title">
                            Do you meet the eligibility requirement for the specific program? *
                            <br>
                            Press "Yes" to proceed.
                        </label>
                        <div class="yes">
                            <input type="radio" id="yes" name="eligible" value="Yes" onclick="termsAgree()">
                            <label for="yes">YES</label>
                        </div>
                        <div class="no">
                            <input type="radio" id="no" name="eligible" value="No" checked onclick="termsAgree()">
                            <label for="no">Not Sure - Refer to Image </label>
                        </div>
                    </div>

                    <div class="reference">
                        <p>Program Category Requirements</p>
                        <img src="../photos/category.jpg">
                    </div>
                </div>

                <div class="upload_tab">
                    <div class="upload" id="upload">
                        <label id="upload-info">4. Document Upload *</label>

                        <label id="valid-title">Resume / Curriculum Vitae *</label>
                        <label for="resume" class="valid-input" id="resume_label">
                            Resume / Curriculum Vitae 
                            <input type="file" name="resume" id="resume" onchange="fileChecker()" >
                        </label>

                        <label id="valid-title">Credential Evaluation*</label>
                        <label for="credential" class="valid-input" id="credential_label">
                            NACES-approved credential evaluation agency <br>
                            (if applicable)
                            <input type="file" name="credential" id="credential" onchange="fileChecker()">
                        </label>

                        <label id="valid-title">Reputation and Character *</label>
                        <label for="reference" class="valid-input" id="reference_label">
                            Reference letter from a colleague and <br> 
                            immediate supervisor (if applicable)
                            <input type="file" name="reference" id="reference" onchange="fileChecker()">
                        </label>

                        <label id="valid-title">Passport *</label>
                        <label for="passport" class="valid-input" id="passport_label">
                            First Page and Last Page 
                            <input type="file" name="passport" id="passport" onchange="fileChecker()">
                        </label>
                    </div>
                </div>
                <div class="privacy_tab">
                    <label id="contact-info">5. Privacy Policy *</label>
                    
                    <p>
                        Read the Privacy Policy and give permission for West Migration Agency LLC to share my information and discuss my candidacy with any US Sponsors as part of the visa process.
                    </p>

                    <label id="contact-title">Terms and Conditions *</label>
                    <a href="https://docs.google.com/document/d/1WMAgSCGvUyVnzKEelKPdI4RcKVJ5v4KCrGwe4w60PNk/edit">Click And Read!</a>

                    <div class="terms">
                        <input type="checkbox" id="agree" name="agree" onclick="termsAgree()" required>
                        <label> Terms and Conditions *</label>
                    </div>

                    <div class="submit">
                        <button type="submit" id="submit" disabled >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

<!-- ------------------------------------- -->
    <!-- FOOTER BAR -->
    <footer>
        <div class="foot-container">
            <div class="foot-subcontainer">
                <!-- LOGO SECTION -->
                <div class="left-foot">
                    <div class="foot-logo">
                        <a id="logo" href="home.php">
                            <img src="../photos/wma-logo.png" id="logo-img">
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

                <!-- PAGE BUTTON SECTION -->
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

                <!-- SOCIAL MEDIA BUTTONS -->
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
</html>