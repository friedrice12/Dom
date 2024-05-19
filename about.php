<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKKAL</title>
    <?php
        $cssPath = 'css/styles.css';
        if (file_exists($cssPath)) {
            echo '<link rel="stylesheet" href="' . $cssPath . '">';
        } else {
            echo '<!-- CSS file not found -->';
        }
    ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="./css/about.css">

    <!--ICONSOUT-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    
    <!--GOOGLEFONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h4>Sakkal</h4></a>
            <ul class="nav__menu">
                
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>




    <section class="team">
        <h2> Our Team</h2>
        <dev class="container team__container">
            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/img14.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Phay Sothiya</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://www.facebook.com/Yaa.energy.27/" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/img16.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Mily Chhayheng</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://www.facebook.com/profile.php?id=100066226006547" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/img17.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Phan reaksmey</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="#" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/img46.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Puth Darasokchea</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://www.facebook.com/profile.php?id=100016139886179" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/img45.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Phorn Panhaudom</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://www.facebook.com/Dom.Blazer" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="images/sovann.jpg">
                </div>
                <div class="team__member-info">
                    <h4>Bun Sovann</h4>
                    <p>Information Technology Engineering</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://www.facebook.com/sovan.bun.92" target="_blank"><i class="uil uil-facebook"></i></a>
                    <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
                </div>
            </article>
        </dev>

    </section>







    <!---------FOOTER---------->
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>Sakkal</h4></a>
                <p>
                    Sakkalគឺជាវេបសាយមួយដែលជួយនិសិត្សកម្ពុជាក្នងការស្វែងរកអាហារូបករណ៏នៅក្នុងប្រទេសនិងក្រៅប្រទេស។​ 
                </p>
            </div>
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+855 11 724 312</p>
                    <p>phaysothiya305@gmail.com</p>
                </div>

                <ul class="footer__socials">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ttthiya/?hl=en" target="_blank"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PhaySothiya" target="_blank"><i class="uil uil-twitter"></i></a>
                    </li>
                </ul>

            </div>
            
        </div>
        <div class="footer__copyright">
            <small>Copyright</small>
        </div>
    </footer>



    <script src="../main.js"></script>


    
</body>
</html>