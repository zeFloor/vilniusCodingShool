<?php
    session_start();
?>

<!DOCTYPE html>
<html lang-en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Baigiamasis</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slideshow.css">
    </head>
    <body>
        <!-------------- HEADER -------------->
        <header id="header">
            <div class="background-hero"></div>
            <a href="javascript:void(0);" class="icon" onclick="toggleBurger()">
                <i class="fa fa-bars"></i>
              </a>
            <div class="navbar-for-mobile">
                <div id="burger" class="">
                    <a href="#how-it-works">How it works</a>
                    <a href="#FAQ">FAQ</a>
                    <a href="#pricing">Pricing</a>
                    <?php 
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit-logout" class="logoutMob" id="logoutMob">LogOut</button></form>';
                            } else {
                                echo '<a onclick="loginScreen()">Login</a>
                                <a onclick="signupScreen()">Signup</a>';
                            }
                        ?> 
                </div>
            </div>
            <section class="container flex-container">
                <nav class="navbar">
                    <ul class="flex-container">
                        <li><a href="#how-it-works">How it works</a></li>
                        <li><a href="#FAQ">FAQ</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                    </ul>
                </nav>
                <a href="#header"><img src="images/logo.png" class="logo" onclick="refreshScreen()" alt="Websites logo"></a>
                <div class="login">
                    <ul class="login-signup flex-container">
                        <?php 
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                      <button type="submit" name="submit-logout" class="logout" id="logout">LogOut</button></form>';
                            } else {
                                echo '<li><a class="loginBtn" onclick="loginScreen()">LogIn</a></li>
                                      <li><a class="signupBtn" onclick="signupScreen()">SignUp</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </section>
        </header>
        <!-------------- HERO -------------->
        <section class="hero">           
            <div class="container flex-container">
                <h1> Smart watch app landing page</h1>
                <div class="watch-login-signup">
                    <img src="images/watch-cropped.png" alt="smart watch">
                    <div class="fadeIn" id="watch-screen">
                    <?php 
                            if(isset($_SESSION['u_id'])) {
                                echo "<div class='logged-in-screen'>
                                        <h2>Welcome,</h2>
                                        <h3>{$_SESSION['u_name']}</h3>
                                        <p>You are <span>logged in</span></p>
                                    </div>";
                            } else {
                                echo '<div class="watch-signup hide">
                                <form class="flex-container" action="includes/signup.inc.php" method="post">
                                    <h2>Sign<span>Up</span></h2>
                                    <input type="text" name="username" placeholder="Username">
                                    <input type="mail" name="email" placeholder="Email">
                                    <input type="password" name="pswd" placeholder="Password">
                                    <input type="submit" name="submit-signup" class="submit-login-signup">
                                </form>
                            </div>
                            <div class="watch-login hide">
                                <form class="flex-container" action="includes/login.inc.php" method="post">
                                    <h2>Log<span>In</span></h2>
                                    <input type="text" name="username" placeholder="Username">
                                    <input type="password" name="pswd" placeholder="Password">
                                    <input type="submit" name="submit-login" onclick="loggedIn()" class="submit-login-signup">
                                </form>
                            </div>';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-------------- HOW TO INSTALL -------------->
        <section class="how-to-install">
            <div class="container flex-container">
                <div class="download-app select">
                    <img src="images/download.png" alt="">
                    <p class="number-1">1</p>
                    <h3><span>Download</span> Our App</h3>
                    <p class="install-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam laudantium, unde rem saepe velit aliquid provident animi doloremque repellat eaque!</p>
                </div>
                <div class="install-app select">
                    <img src="images/gear.png" alt="">
                    <p class="number-2">2</p>
                    <h3><span>Install</span> Our App</h3>
                    <p class="install-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam laudantium, unde rem saepe velit aliquid provident animi doloremque repellat eaque!</p>
                </div>
                <div class="start-creating select">
                    <img src="images/diamond.png" alt="">
                    <p class="number-3">3</p>
                    <h3><span>Start</span> Creating</h3>
                    <p class="install-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam laudantium, unde rem saepe velit aliquid provident animi doloremque repellat eaque!</p>
                </div>
            </div>
        </section>
        <!-------------- HOW IT WORKS -------------->
        <section class="how-it-works" id="how-it-works">
            <div class="container flex-container">
                <h2>How it <span>works</span></h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptates ex quasi dolor? Debitis, accusamus dicta.<span class="text-for-desktop">Doloribus nulla, eaque deserunt facilis repellendus hic vero nesciunt magnam eius repellat saepe porro.</span></p>
                <iframe src="https://www.youtube.com/embed/TSrpAHiKuPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--Disabled image of a video, replaced by youtube video
                <img src="images/video_cropped.png" alt="introductional video">
                <div class="video flex-container"><img src="images/play-circle.png" alt="" class="play-button"></div>
                -->
            </div>
        </section>
        <!-------------- WHY PEOPLE LOVES US -------------->
        <section class="why-people" id="why-people">
            <div class="container">
                <h2>Why people <span>loves us</span></h2>
                <div class="flex-container item apear">
                    <img src="images/CEO.png" alt="Chief Executive Officer" class="qouter">
                    <div class="person-qoute">
                        <div class="flex-container qoute">
                            <i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ex rerum nulla sed natus vero possimus odit harum, tempore iure rem recusandae soluta dolorum, fuga eos quos consequatur temporibus quae!</p>
                        </div>
                        <div class="under-qoute flex-container">
                            <div class="name-title">
                                <p class="name">Mike Smith</p>
                                <p class="title">Chief Executive Officer</p>
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="flex-container item hide">
                    <img src="images/CTO.png" alt="Chief Technology Officer" class="qouter">
                    <div class="person-qoute">
                        <div class="flex-container qoute">
                            <i class="fas fa-quote-left"></i>
                            <p>Libero sapiente soluta consequatur dolore odit exercitationem, possimus aut non impedit error explicabo. Ex laboriosam id iusto voluptas esse!</p>
                        </div>
                        <div class="under-qoute flex-container">
                            <div class="name-title">
                                <p class="name">Smith Mikey</p>
                                <p class="title">Chief Technology Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-container item hide">
                    <img src="images/COO.png" alt="Chief Operating Officer" class="qouter">
                    <div class="person-qoute">
                        <div class="flex-container qoute">
                            <i class="fas fa-quote-left"></i>
                            <p>Molestias officiis a optio dolore! Cupiditate quod similique, atque iure maiores hic tempora odio velit ducimus expedita vero fuga corrupti consequuntur ad eius blanditiis dolores delectus iste.</p>
                        </div>
                        <div class="under-qoute flex-container">
                            <div class="name-title">
                                <p class="name">Micky Mike</p>
                                <p class="title">Chief Operating Officer</p>
                            </div>
                        </div>
                    </div>                    
                </div> 
                <div class="arrows">
                    <button class="previousBtn arrowGray"><i class="fas fa-arrow-left"></i></button>
                    <button class="nextBtn arrowBlue"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </section>
        <!-------------- HOW IT LOOKS -------------->
        <section class="how-it-looks">
            <div class="container-phones">
                <h2>How <span>it looks</span></h2>
                <div class="phones flex-container exploded">
                    <img src="images/Very-Left-Screenshot.png" class="faded" alt="">
                    <img src="images/Left-Screenshot.png" class="faded" alt="">
                    <img src="images/iPhoneX.png" class="faded" alt="">
                    <img src="images/Right-Screenshot.png" class="faded" alt="">
                    <img src="images/Very-Right-Screenshot.png" class="faded" alt="">
                </div>
                <div>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="images/Very-Left-Screenshot.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <img src="images/Left-Screenshot.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <img src="images/iPhoneX.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <img src="images/Right-Screenshot.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <img src="images/Very-Right-Screenshot.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                        <br>
                        <div class="dots-under-photos">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        <span class="dot" onclick="currentSlide(4)"></span> 
                        <span class="dot" onclick="currentSlide(5)"></span> 
                    </div>
                </div>  
            </div>
        </section>
        <!-------------- FAQ -------------->
        <section class="FAQ" id="FAQ">
            <div class="container">
                <h2>Frequently <span>asked questions</span></h2>
                <div class="questions-and-watch flex-container">
                    <div class="questions">
                        <button class="accordion">Is this app available for smartwatches?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, incidunt.</p>
                        </div>
                        <button class="accordion">How can I download this app?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci repellat in asperiores rerum porro quibusdam.</p>
                        </div>
                        <button class="accordion">Can I use it for my personal use?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, incidunt.</p>
                        </div>
                        <button class="accordion">Is it normal that this happenes?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, incidunt.</p>
                        </div>
                    </div>
                    <img src="images/watch-cropped.png" alt="smart watch">
                </div>
            </div>
        </section>   
    <!-------------- DOWNLOAD THE FUTURE -------------->
    <section class="download">
        <div class="phonesBG flex-container">
            <div class="left-phoneBG"><img src="images/Device.png" class="left" alt="Mobile device"></div>
            <div class="right-phoneBG"><img src="images/Device.png" class="right" alt="Mobile device"></div>
        </div>
        <div class="container">
            <h2>Download the future</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur delectus cupiditate maiores, voluptate enim blanditiis minima id eveniet ea soluta.</p>
            <form class="flex-container" action="includes/subscriptions.inc.php" method="post">
                <i class="fas fa-paper-plane"></i>
                <input type="mail" name="email" class="item1" placeholder="Email">
                <input type="submit" name="submit-sub" class="item2" value="SUBSCRIBE">
            </form>
            <div class="logos flex-container">
                <i class="fab fa-apple"></i>
                <i class="fab fa-android"></i>
                <i class="fab fa-windows"></i>
            </div>
        </div>
    </section>
    <!-------------- PRICING PLANS -------------->
    <section class="pricing-plans" id="pricing">
        <div class="container">
            <div class="texts">
                <h2>Pricing <span>Plans</span></h2>
                <p class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nulla?</p>
            </div>
            <div class="prices flex-container">
                <div class="starter">
                    <p class="card-tag">starter</p>
                    <p class="price">$10</p>
                    <p class="monthly">Per user / monthly</p>
                    <p class="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius quidem impedit accusamus exercitationem consectetur.</p>
                    <div class="numbers"> 
                        <p><b>20,000</b> Notifications</p>
                        <p><b>1,000</b> App updates</p>
                        <p><b>Limited</b> Bandwidth</p>
                        <p><b>5M</b> Users</p>
                    </div>
                    <input type="submit" value="SING UP">
                </div>
                <div class="professional">
                    <p class="card-tag">professional</p>
                    <p class="price">$20</p>
                    <p class="monthly">Per user / monthly</p>
                    <p class="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius quidem impedit accusamus exercitationem consectetur.</p>
                    <div class="numbers">
                        <p><b>30,000</b> Notifications</p>
                        <p><b>3,000</b> App updates</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>10M</b> Users</p>
                    </div>
                    <input type="submit" value="SING UP">
                </div>
                <div class="advanced">
                    <p class="card-tag">advanced</p>
                    <p class="price">$30</p>
                    <p class="monthly">Per user / monthly</p>
                    <p class="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius quidem impedit accusamus exercitationem consectetur.</p>
                    <div class="numbers">
                        <p><b>50,000</b> Notifications</p>
                        <p><b>5,000</b> App updates</p>
                        <p><b>Unlimited</b> Bandwidth</p>
                        <p><b>20M</b> Users</p>
                    </div>
                    <input type="submit" value="SING UP">
                </div>
            </div>
        </div>
    </section>
    <!-------------- LATEST POSTS -------------->
    <section class="latest-posts" id="posts">
        <div class="container">
            <h2>Latest <span>posts</span></h2>
            <div class="posts flex-container">
                <div class="post desktop">
                    <p class="date">On Dec 16, 2021 by Adam</p>
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                    <p class="texts">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi ut facere, voluptate voluptatum earum possimus eveniet nemo ab debitis odit.</p>
                </div>
                <div class="post highlighted">
                    <p class="date">On Dec 16, 2021 by Adam</p>
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                    <p class="texts">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi ut facere, voluptate voluptatum earum possimus eveniet nemo ab debitis odit.</p>
                </div>
                <div class="post post-no-mobile">
                    <p class="date">On Dec 16, 2021 by Adam</p>
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                    <p class="texts">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi ut facere, voluptate voluptatum earum possimus eveniet nemo ab debitis odit.</p>
                </div>
            </div>
            <input type="submit" value="View All">
        </div>
    </section>
    <!-------------- CONTACT US -------------->
    <section class="contact-us" id="contact-us">
        <div class="container">
            <h2>Contact <span>us</span></h2>
            <p>We'd love to hear from you</p>
            <form class="contact-form flex-container" action="includes/issue.inc.php" method="post">
                <i class="fas fa-paper-plane"></i>
                <input type="mail" name="email" class="item1" placeholder="Email">
                <select name="issue" id="select-issue" class="item2">
                    <option disabled selected hidden>Select Issue</option>
                    <option value="no-download">Can't Download App</option>
                    <option value="app-freeze">My App freezes</option>
                    <option value="subscription">Can't End My Subscription</option>
                    <option value="no-bind">Watch Can't Bind</option>
                </select>
                <input type="submit" name="submit-issue" class="item3">
            </form>
            <ul class="contacts flex-container">
                <li><i class="fas fa-at"></i><a href="mailto:info@email.com">info@email.com</a></li>
                <li><i class="fas fa-phone-volume"></i><a href="tel:123456789">123-456-789</a></li>
                <li><i class="far fa-compass"></i><a href="">123 Vilnius, Lithuania</a></li>
            </ul>
        </div>
        <div class="mapBG"></div>
    </section>
    <!-------------- FOOTER -------------->
    <section class="footer">
        <div class="container">
            <div class="navigation flex-container">
                <div class="app-stores flex-container">
                    <a href="https://www.apple.com/app-store/" target="_blank"><img src="images/AppleStore.png" alt=""></a>
                    <a href="https://play.google.com/store" target="_blank"><img src="images/AppStore.png" alt=""></a>
                </div>
                <ul class="navbar flex-container">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#why-people">Testimonials</a></li>
                    <li><a href="#pricing">Plans</a></li>
                    <li><a href="#posts">Blog</a></li>
                    <li><a href="#FAQ">About</a></li>
                </ul>
            </div>
            <div class="social flex-container">
                <p class="copyrights">&copy2021 | All rights rezerved</p>
                <div class="socials flex-container">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/71e1ecdbf7.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jsFunctions.js"></script>
    </body>
</html>
