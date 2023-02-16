<<<<<<< HEAD:profile.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Social Media Website</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-left">
            <a href="index.php" class="logo"><img src="images/testsite_logo_500x500.png"></a>

            <div class="search-box">
                <img src="images/Icons/search.png">
                <input type="text" placeholder="search">
            </div>

        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#" class="active-link"><img src="images/Icons/home.png"> <span>Home</span></a></li>
                <li><a href="#"><img src="images/Icons/network.png"> <span>My Network</span></a></li>
                <li><a href="#"><img src="images/Icons/job.png"> <span>Jobs</span></a></li>
                <li><a href="#"><img src="images/Icons/message.png"> <span>Messaging</span></a></li>
                <li><a href="#"><img src="images/Icons/notification.png"> <span>Notifications</span></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="images/8-LEVK5LPwqnRXb3K.png" class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!------- profile-drop-down-menu ------->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="images/8-LEVK5LPwqnRXb3K.png">
                    <div>
                        <h3>Saxophone Rat</h3>
                        <a href="profile.html">See your profile</a>
                    </div>
                </div>
                <hr>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/feedback.png">
                    <p>Give Feedback</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/settings.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/help_2.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/display.png">
                    <p>Display & Accessibility</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </nav>
    <!------- navbar close ------->
    <div class="container">
    <div class="profile-main">
    <div class="profile-container">
        <img src="images/profile_banner.jpg" width="100%">
        <div class="profile-container-inner">
            <img src="images/8-LEVK5LPwqnRXb3K.png" class="profile-pic">
            <h1>Saxophone Rat</h1>
            <b>Web Developer ar Microsoft | Former developer at DataStack and Intern at Oracle</b>
            <p>San Francisco, United States &middot; <a href="#">Contact info</a></p>
            <div class="mutual-connection">
                <img src="images/8-cNwktPUwN5tZ8K1.png">
                <span>1 mutual connection: Magic Rat</span>
            </div>
            <div class="profile-btn">
                <a href="#" class="primary-btn"><img src="images/Icons/connect.png">Connect</a>
                <a href="#"><img src="images/Icons/message.png">Message</a>
            </div>
        </div>
    </div>
    <div class="profile-description">
        <h2>About</h2>
        <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors on first page of all major search engines then you are ahead your competitors.</p>
        <a href="#" class="see-more-link">See more...</a>
    </div>
    <div class="profile-description">
        <h2>Experience</h2>
        <div class="profile-desc-row">
            <img src="images/Icons/microsoft.png">
            <div>
                <h3>Lead Front-End Developer</h3>
                <b>Microsoft &middot; Full-time</b>
                <b>Feb 2021 - Present &middot; 1.5 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/slack.png">
            <div>
                <h3>Full Slack Developer</h3>
                <b>Slack &middot; Full-time</b>
                <b>June 2018 - Jan 2021 &middot; 2.6 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/google.png">
            <div>
                <h3>Web Developer</h3>
                <b>Google Inc &middot; Full-time</b>
                <b>Sept 2015 - May 2018 &middot; 2.8 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
            </div>
        </div>
        <hr>
        <a href="#" class="experience-link">Show all 7 experiences <img src="images/Icons/right_arrow.png"></a>
    </div>

    <div class="profile-description">
        <h2>Education</h2>
        <div class="profile-desc-row">
            <img src="images/Icons/stanford.png">
            <div>
                <h3>Stanford University</h3>
                <b>BSEE, Electrical Engineering</b>
                <b>2018 - 2022</b>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/northwestern.png">
            <div>
                <h3>Northwestern University</h3>
                <b>Computer Science</b>
                <b>2015 - 2018</b>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/harvard.png">
            <div>
                <h3>Harvard University</h3>
                <b>Senior High School</b>
                <b>2005 - 2015</b>
            </div>
        </div>
    </div>
    <div class="profile-description">
        <h2>Skills</h2>
        <a href="#" class="skills-btn">Leadership</a>
        <a href="#" class="skills-btn">Web Design</a>
        <a href="#" class="skills-btn">Development</a>
        <a href="#" class="skills-btn">Communication</a>
        <a href="#" class="skills-btn">UI/UX</a>
        <a href="#" class="skills-btn">Planning</a>
        <a href="#" class="skills-btn">Coding</a>
        <a href="#" class="skills-btn">JavaScript</a>
        <a href="#" class="skills-btn">Python</a>
        <a href="#" class="skills-btn">Enterprenuorship</a>
    </div>
    <div class="profile-description">
        <h2>Languages</h2>
        <a href="#" class="language-btn">English</a>
        <a href="#" class="language-btn">Finnish</a>
        <a href="#" class="language-btn">Russian</a>
    </div>
    </div>
    <!------- profile-sidebar ------->
        <div class="profile-sidebar">
            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master the 5 principles of web design</p>
                <div>
                    <img src="images/8-BwywlHOiIDXoGaB.png">
                    <img src="images/logo.png">
                </div>
                <b>Brand and Demand in Xiaomi</b>
                <a href="#" class="ad-link">Learn More</a>
            </div>
            <div class="sidebar-people">
                <h3>People you may know</h3>
                <div class="sidebar-people-row">
                    <img src="images/8-MdscR4uyjyRRldy.png">
                    <div>
                        <h2>Rat With Magic</h2>
                        <p>Not with the usual powder 0_0</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/8-Hnq4qLg3JLYYZFY.png">
                    <div>
                        <h2>Raccoon Climbing</h2>
                        <p>Time to time gets mistaken for sly cooper</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/8-BwywlHOiIDXoGaB.png">
                    <div>
                        <h2>Dog with a beret</h2>
                        <p>Has a beret</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/squrellen.png">
                    <div>
                        <h2>Fumbled Squirrel</h2>
                        <p>Homeless</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-footer">
        <div class="sidebar-useful-links">
            <a href="#">About</a>
            <a href="#">Accessibility</a>
            <a href="#">Help Center</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Advertising</a>
            <a href="#">Get the App</a>
            <a href="#">More</a>
            <div class="copyright-msg">
                <img src="images/testsite_logo_500x500.png">
                <p>Sample Text &#169; 2023 All rights reserved</p>
            </div>
        </div>
    </div>
    <script>
        let profileMenu = document.getElementById("profileMenu");
        function toggleMenu(){
            profileMenu.classList.toggle("open-menu")
        }
    </script>

</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Social Media Website</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-left">
            <a href="index.html" class="logo"><img src="images/testsite_logo_500x500.png"></a>

            <div class="search-box">
                <img src="images/Icons/search.png">
                <input type="text" placeholder="search">
            </div>

        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#" class="active-link"><img src="images/Icons/home.png"> <span>Home</span></a></li>
                <li><a href="#"><img src="images/Icons/network.png"> <span>My Network</span></a></li>
                <li><a href="#"><img src="images/Icons/job.png"> <span>Jobs</span></a></li>
                <li><a href="#"><img src="images/Icons/message.png"> <span>Messaging</span></a></li>
                <li><a href="#"><img src="images/Icons/notification.png"> <span>Notifications</span></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="images/8-LEVK5LPwqnRXb3K.png" class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!------- profile-drop-down-menu ------->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="images/8-LEVK5LPwqnRXb3K.png">
                    <div>
                        <h3>Saxophone Rat</h3>
                        <a href="profile.html">See your profile</a>
                    </div>
                </div>
                <hr>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/feedback.png">
                    <p>Give Feedback</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/settings.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/help_2.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/display.png">
                    <p>Display & Accessibility</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="images/Icons/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </nav>
    <!------- navbar close ------->
    <div class="container">
    <div class="profile-main">
    <div class="profile-container">
        <img src="images/profile_banner.jpg" width="100%">
        <div class="profile-container-inner">
            <img src="images/8-LEVK5LPwqnRXb3K.png" class="profile-pic">
            <h1>Saxophone Rat</h1>
            <b>Web Developer ar Microsoft | Former developer at DataStack and Intern at Oracle</b>
            <p>San Francisco, United States &middot; <a href="#">Contact info</a></p>
            <div class="mutual-connection">
                <img src="images/8-cNwktPUwN5tZ8K1.png">
                <span>1 mutual connection: Magic Rat</span>
            </div>
            <div class="profile-btn">
                <a href="#" class="primary-btn"><img src="images/Icons/connect.png">Connect</a>
                <a href="#"><img src="images/Icons/message.png">Message</a>
            </div>
        </div>
    </div>
    <div class="profile-description">
        <h2>About</h2>
        <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors on first page of all major search engines then you are ahead your competitors.</p>
        <a href="#" class="see-more-link">See more...</a>
    </div>
    <div class="profile-description">
        <h2>Experience</h2>
        <div class="profile-desc-row">
            <img src="images/Icons/microsoft.png">
            <div>
                <h3>Lead Front-End Developer</h3>
                <b>Microsoft &middot; Full-time</b>
                <b>Feb 2021 - Present &middot; 1.5 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/slack.png">
            <div>
                <h3>Full Slack Developer</h3>
                <b>Slack &middot; Full-time</b>
                <b>June 2018 - Jan 2021 &middot; 2.6 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/google.png">
            <div>
                <h3>Web Developer</h3>
                <b>Google Inc &middot; Full-time</b>
                <b>Sept 2015 - May 2018 &middot; 2.8 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
            </div>
        </div>
        <hr>
        <a href="#" class="experience-link">Show all 7 experiences <img src="images/Icons/right_arrow.png"></a>
    </div>

    <div class="profile-description">
        <h2>Education</h2>
        <div class="profile-desc-row">
            <img src="images/Icons/stanford.png">
            <div>
                <h3>Stanford University</h3>
                <b>BSEE, Electrical Engineering</b>
                <b>2018 - 2022</b>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/northwestern.png">
            <div>
                <h3>Northwestern University</h3>
                <b>Computer Science</b>
                <b>2015 - 2018</b>
                <hr>
            </div>
        </div>
        <div class="profile-desc-row">
            <img src="images/Icons/harvard.png">
            <div>
                <h3>Harvard University</h3>
                <b>Senior High School</b>
                <b>2005 - 2015</b>
            </div>
        </div>
    </div>
    <div class="profile-description">
        <h2>Skills</h2>
        <a href="#" class="skills-btn">Leadership</a>
        <a href="#" class="skills-btn">Web Design</a>
        <a href="#" class="skills-btn">Development</a>
        <a href="#" class="skills-btn">Communication</a>
        <a href="#" class="skills-btn">UI/UX</a>
        <a href="#" class="skills-btn">Planning</a>
        <a href="#" class="skills-btn">Coding</a>
        <a href="#" class="skills-btn">JavaScript</a>
        <a href="#" class="skills-btn">Python</a>
        <a href="#" class="skills-btn">Enterprenuorship</a>
    </div>
    <div class="profile-description">
        <h2>Languages</h2>
        <a href="#" class="language-btn">English</a>
        <a href="#" class="language-btn">Finnish</a>
        <a href="#" class="language-btn">Russian</a>
    </div>
    </div>
    <!------- profile-sidebar ------->
        <div class="profile-sidebar">
            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master the 5 principles of web design</p>
                <div>
                    <img src="images/8-BwywlHOiIDXoGaB.png">
                    <img src="images/logo.png">
                </div>
                <b>Brand and Demand in Xiaomi</b>
                <a href="#" class="ad-link">Learn More</a>
            </div>
            <div class="sidebar-people">
                <h3>People you may know</h3>
                <div class="sidebar-people-row">
                    <img src="images/8-MdscR4uyjyRRldy.png">
                    <div>
                        <h2>Rat With Magic</h2>
                        <p>Not with the usual powder 0_0</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/8-Hnq4qLg3JLYYZFY.png">
                    <div>
                        <h2>Raccoon Climbing</h2>
                        <p>Time to time gets mistaken for sly cooper</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/8-BwywlHOiIDXoGaB.png">
                    <div>
                        <h2>Dog with a beret</h2>
                        <p>Has a beret</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
                <div class="sidebar-people-row">
                    <img src="images/squrellen.png">
                    <div>
                        <h2>Fumbled Squirrel</h2>
                        <p>Homeless</p>
                        <a href="#">Connect</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-footer">
        <div class="sidebar-useful-links">
            <a href="#">About</a>
            <a href="#">Accessibility</a>
            <a href="#">Help Center</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Advertising</a>
            <a href="#">Get the App</a>
            <a href="#">More</a>
            <div class="copyright-msg">
                <img src="images/testsite_logo_500x500.png">
                <p>Sample Text &#169; 2023 All rights reserved</p>
            </div>
        </div>
    </div>
    <script>
        let profileMenu = document.getElementById("profileMenu");
        function toggleMenu(){
            profileMenu.classList.toggle("open-menu")
        }
    </script>

</body>

>>>>>>> 75d320b1f0d76151bb08d96719b80babaa4fef16:profile.html
</html>