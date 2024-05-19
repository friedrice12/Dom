<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKKAL</title>
    

    <link rel="stylesheet" href="../css/styles.css">

    <!--ICONSOUT-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <?php
        $cssPath = 'css/styles.css';
        if (file_exists($cssPath)) {
            echo '<link rel="stylesheet" href="' . $cssPath . '">';
        } else {
            echo '<!-- CSS file not found -->';
        }
    ?>
    <!--Swiper-->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                                         

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
                <li><a href="signup.php">Sign Up</a></li>
                
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>ស្វែងរកអាហារូបករណ៏ជាមួយពួកយើង</h1>
                <p>
                    មិនដឹងថាត្រូវស្វែងរកអាហារូបករណ៍ដែលពេញនិយម និងថ្មីបំផុតនៅឯណាដើ​ម្បីបន្តការសិក្សាថ្នាក់ឧត្តមសិក្សាមែនអត់?​ 
                    មិនបាច់ទៅណាឆ្ងាយទេ​ នៅទីនេះមាន
                </p>
                <a href="contact.php" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
            </div>

            <div class="header__right">
                <div class="header__right-image">
                    <img src="images/header2.png">
                </div>
            </div>

        </div>
    </header>

    <!--About-->

    <section class="courses">
        <h2>About scholarship</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="images/Cambodia-2017.jpg">
                </div>
                <div class="course__info">
                <h4>Scholarship</h4>
                <p>អាហារូបករណ៏ដើ​ម្បីបន្តការសិក្សាថ្នាក់ឧត្តមសិក្សា</p>
                <a href="sholar.php" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img51.jpg">
                </div>
                <div class="course__info">
                <h4>Sharing Experience</h4>
                <p>ចែករំលែកបទពិសោធន៍ផ្សេងក្នុងការសិក្សា</p>
                <a href="sharing.php" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img48.avif">
                </div>
                <div class="course__info">
                <h4>Upcoming Event</h4>
                <p>ព័ត៌មានសិក្ខាសាលាស្តីពីការសិក្សានិងអាហារូបករណ៏</p>
                <a href="event.php" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            

            

        </div>
    </section>


    <section class="container testimonials__container mySwiper">
        <h2>Students' Comment</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/img46.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Sokchea</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        This site is very good for me as a student looking for a scholarship.
                        
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/img45.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>uddom</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        This site is very good for me as a student looking for a scholarship.
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="images/img42.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Sovann</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        This site is very good for me as a student looking for a scholarship.
                        
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
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




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../main.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper",{
            slidePerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //when window width is >=600px
            breakpoints: {
                600: {
                    slidePerView: 3
                }
            }
        });
    </script>
</body>
</html>