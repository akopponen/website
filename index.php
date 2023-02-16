<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>Social Media Website</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <nav class="navbar">
        <div class="navbar-left">
            <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/testsite_logo_500x500.png"></a>

            <div class="search-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/search.png">
                <input type="text" placeholder="search">
            </div>

        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#" class="active-link"><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/home.png"> <span>Home</span></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/network.png"> <span>My Network</span></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/job.png"> <span>Jobs</span></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/message.png"> <span>Messaging</span></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/notification.png"> <span>Notifications</span></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png" class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!------- profile-drop-down-menu ------->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png">
                    <div>
                        <h3>Saxophone Rat</h3>
                        <a href="profile.php">See your profile</a>
                    </div>
                </div>
                <hr>
                <a href="#" class="profile-menu-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/feedback.png">
                    <p>Give Feedback</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/settings.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/help_2.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/display.png">
                    <p>Display & Accessibility</p>
                    <span>></span>
                </a>
                <a href="#" class="profile-menu-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </nav>
    <!------- navbar close ------->
    <div class="container">
        <!------- left-sidebar ------->
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile_banner.jpg" width="100%">
                <div class="sidebar-profile-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png">
                    <!-- name text -->
                    <h1><?php the_field("profile_name_text"); ?></h1>
                    <!-- profile description -->
                    <h3><?php the_field("profile_description_text"); ?></h3>
                    <ul>
                        <li>Your profile views<span>52</span></li>
                        <li>Your post views<span>812</span></li>
                        <li>Your connections<span>204</span></li>
                    </ul>
                </div>
                <div class="sidebar-profile-link">
                    <a href="#"><i class="fa fa-archive"></i> My items</a>
                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Try Premium</a>
                </div>
            </div>

            <div class="sidebar-activity" id="sidebarActivity">
                <h3>RECENT</h3>
                <a href="#"><i class="fa fa-history"></i> Web Development</a>
                <a href="#"><i class="fa fa-history"></i> User Interface</a>
                <a href="#"><i class="fa fa-history"></i> Online Learning</a>
                <a href="#"><i class="fa fa-history"></i> Learn Online</a>
                <a href="#"><i class="fa fa-history"></i> Code Better</a>
                <a href="#"><i class="fa fa-history"></i> Group Learning</a>
                <h3>GROUPS</h3>
                <a href="#"><i class="fa fa-users"></i> Web Design Group</a>
                <a href="#"><i class="fa fa-users"></i> HTML & CSS Learners</a>
                <a href="#"><i class="fa fa-users"></i> Python & JavaScript Group</a>
                <a href="#"><i class="fa fa-users"></i> Learn Coding Online</a>
                <h3>HASHTAG</h3>
                <a href="#"><i class="fa fa-hashtag"></i> webdevelopment</a>
                <a href="#"><i class="fa fa-hashtag"></i> userinterface</a>
                <a href="#"><i class="fa fa-hashtag"></i> onlinelearning</a>
                <div class="discover-more-link">
                    <a href="#">Discover more</a>
                </div>
            </div>
            <p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>
        </div>
        <!------- main-content ------->
        <div class="main-content">

            <div class="create-post">
                <div class="create-post-input">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png">
                    <textarea rows="2" placeholder="Write a post"></textarea>
                </div>
                <div class="create-post-links">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/camera.png">Photo</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/video_cam.png">Video</li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/Icons/event_copy.png">Event</li>
                    <li>Post</li>
                </div>
            </div>
            <div class="sort-by">
                <hr>
                <p>Sort by: <span>top <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png"></span></p>
            </div>
            <div class="post">
                <div class="post-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-cNwktPUwN5tZ8K1.png">
                    <div>
                        <!-- <h1>Magic Rat</h1> -->
                        <h1><?php the_field("white_box_heater_text"); ?></h1   >
                        <small><?php the_field("white_box_description_text"); ?></small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p><?php the_field("white_box_post_description_text"); ?></p>
                <?php $image = get_field("white_box_post_pic"); ?>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/post1.jpg" width="100%"> -->
                <div class="post-img">
                    <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["title"]; ?>"/>
                </div>
                
                <div class="post-stats">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/heart.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/clap.png">
                    <span class="liked-users">Abhinav mishra and 75 others</span>
                </div>
                <div>
                    <span>22 comments &middot; 40 shares</span>
                </div>
            </div>
            <!------- post 1 ------->
            <div class="post-activity">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png" class="post-activity-user-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png" class="post-activity-arrow-icon">
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like_post.png">
                    <span>Like</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/comment_post.png">
                    <span>Comment</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/share_post.png">
                    <span>Share</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/send_post.png">
                    <span>Send</span>
                </div>
            </div>
            <!------- post 2 ------->
            <div class="post">
                <div class="post-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-MdscR4uyjyRRldy.png">
                    <div>
                        <h1>Rat With Magic</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/post2.jpg" width="100%">
                <div class="post-stats">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/heart.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/clap.png">
                    <span class="liked-users">Abhinav mishra and 75 others</span>
                </div>
                <div>
                    <span>22 comments &middot; 40 shares</span>
                </div>
            </div>
            <div class="post-activity">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png" class="post-activity-user-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png" class="post-activity-arrow-icon">
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like_post.png">
                    <span>Like</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/comment_post.png">
                    <span>Comment</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/share_post.png">
                    <span>Share</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/send_post.png">
                    <span>Send</span>
                </div>
            </div>
            <!------- post 3 ------->
            <div class="post">
                <div class="post-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-Hnq4qLg3JLYYZFY.png">
                    <div>
                        <h1>Raccoon Climbing</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/post3.jpg" width="100%">
                <div class="post-stats">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/heart.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/clap.png">
                    <span class="liked-users">Abhinav mishra and 75 others</span>
                </div>
                <div>
                    <span>22 comments &middot; 40 shares</span>
                </div>
            </div>
            <div class="post-activity">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png" class="post-activity-user-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png" class="post-activity-arrow-icon">
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like_post.png">
                    <span>Like</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/comment_post.png">
                    <span>Comment</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/share_post.png">
                    <span>Share</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/send_post.png">
                    <span>Send</span>
                </div>
            </div>
            <!------- post 4 ------->
            <div class="post">
                <div class="post-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-BwywlHOiIDXoGaB.png">
                    <div>
                        <h1>Dog with a beret</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/post4.jpg" width="100%">
                <div class="post-stats">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/heart.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/clap.png">
                    <span class="liked-users">Abhinav mishra and 75 others</span>
                </div>
                <div>
                    <span>22 comments &middot; 40 shares</span>
                </div>
            </div>
            <div class="post-activity">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-LEVK5LPwqnRXb3K.png" class="post-activity-user-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png" class="post-activity-arrow-icon">
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like_post.png">
                    <span>Like</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/comment_post.png">
                    <span>Comment</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/share_post.png">
                    <span>Share</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/send_post.png">
                    <span>Send</span>
                </div>
            </div>
            <!------- post 5 ------->
            <div class="post">
                <div class="post-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-BwywlHOiIDXoGaB.png">
                    <div>
                        <h1>Dog with a beret</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and digital marketing strategy. If you are on first page of all major search engines then you are ahead among your competitors.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/post5.jpg" width="100%">
                <div class="post-stats">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/heart.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/clap.png">
                    <span class="liked-users">Abhinav mishra and 75 others</span>
                </div>
                <div>
                    <span>22 comments &middot; 40 shares</span>
                </div>
            </div>
            <div class="post-activity">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-BwywlHOiIDXoGaB.png" class="post-activity-user-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/arrow_down.png" class="post-activity-arrow-icon">
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/like_post.png">
                    <span>Like</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/comment_post.png">
                    <span>Comment</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/share_post.png">
                    <span>Share</span>
                </div>
                <div class="post-activity-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/send_post.png">
                    <span>Send</span>
                </div>
            </div>

        </div>
        <!------- right-sidebar ------->
        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Icons/more.png" class="info-icon">
                <h3>Trending News</h3>
                <a href="#">High demand for skilled people</a>
                <span>1d ago &middot; 12,936 readers</span>

                <a href="#">Careers growing horizontally too</a>
                <span>19h ago &middot; 999 readers</span>

                <a href="#">Less work visa for US, more for UK</a>
                <span>1d ago &middot; 32,112 readers</span>

                <a href="#">More hiring = higher confidence?</a>
                <span>18h ago &middot; 8,653 readers</span>

                <a href="#">Gautam Adani is the world's third richest...</a>
                <span>12h ago &middot; 3,889 readers</span>
                <a href="#" class="read-more-link">Read More</a>
            </div>
            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master the 5 principles of web design</p>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/8-BwywlHOiIDXoGaB.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                </div>
                <b>Brand and Demand in Xiaomi</b>
                <a href="#" class="ad-link">Learn More</a>
            </div>
            <div class="sidebar-useful-links">
                <a href="#">About</a>
                <a href="#">Accessibility</a>
                <a href="#">Help Center</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Advertising</a>
                <a href="#">Get the App</a>
                <a href="#">More</a>
                <div class="copyright-msg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/testsite_logo_500x500.png">
                    <p>Sample Text &#169; 2023 All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        let profileMenu = document.getElementById("profileMenu");
        function toggleMenu(){
            profileMenu.classList.toggle("open-menu")
        }
    </script>

    <script>
        let sideActivity = document.getElementById("sidebarActivity")
        let moreLink = document.getElementById("showMoreLink")

        function toggleActivity(){
            sideActivity.classList.toggle("open-activity");

            if(sideActivity.classList.contains("open-activity")){
                moreLink.innerHTML = "Show less <b>-</b>";
            }else{
                moreLink.innerHTML = "Show more <b>+</b>"
            }
        }
    </script>

</body>

</html>