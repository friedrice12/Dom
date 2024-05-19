<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKKAL</title>

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="./css/about.css">
    <?php
        $cssPath = 'css/styles.css';
        if (file_exists($cssPath)) {
            echo '<link rel="stylesheet" href="' . $cssPath . '">';
        } else {
            echo '<!-- CSS file not found -->';
        }
    ?>
    <style>
        .courses {
            margin-top: 1rem;
        }

    </style>
    

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



    <section class="courses">
        <h2>Upcoming Event</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="images/img33.jpg">
                </div>
                <div class="course__info">
                <h4>ពិព័រណ៍អាហារូបករណ៍ និងសាកលវិទ្យាល័យ </h4>
                <p>ោះមកមើលទាំងអស់គ្នាថាតើកម្មវិធីពិព័រណ៍អាហារូបករណ៍ និងសាកលវិទ្យាល័យ GAW 2K24 មានអ្វីសំខាន់ចង់បង្ហាញ? 🤔

                    🥳 ថៃ្ងនេះពួកយើងសូមណែនាំអំពី "Passbook" !!!
                    
                    នៅក្នុងកម្មវិធីពិព័រណ៍អាហារូបករណ៍ និងសាកលវិទ្យាល័យ ពួកយើងនិងមានចែកជូន Passbook ទៅកាន់អ្នកទាំងអស់គ្នាដើម្បីទទួលបានព័ត៌មានពីបណ្តាស្ថាប័ននានានៅក្នុងកម្មវិធីនេះ
                    
                    👉សម្រាប់អ្នកដែលបានធ្វើការចុះឈ្មោះរួចរាល់នឹងទទួលបាន  Passbook ម្នាក់  1 ដោយឥតគិតថ្លៃ
                    
                    ចុះឈ្មោះចូលរួមដោយសេរីតាមតំណភ្ជាប់៖ 📌 </p>
                <a href="https://forms.office.com/r/PhW39KGEek" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>
        </div>
    </section>














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