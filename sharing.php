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
        <h2>Sharing Session</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="images/img22.jpg">
                </div>
                <div class="course__info">
                <h4>Chea Chansovanrena</h4>
                <p>វីដេអូពេញកិច្ចសម្ភាសរបស់និស្សិតយើងម្នាក់គឺ Chea Chansovanrena ដែលគាត់ត្រៀមនឹងធ្វើដំណើរទៅសិក្សាជំនាញ Bachelor of Business នៅ La Trobe University ប្រទេសអូស្ដ្រាលី </p>
                <a href="https://podcasters.spotify.com/pod/show/weduabroad/episodes/Chea-Chansovanrena--Bachelor-of-Business--La-Trobe-University-e2j6o5j" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img23.jpg">
                </div>
                <div class="course__info">
                <h4>Cecilia Goh</h4>
                <p>ជួបជាមួយអ្នកតំណាងសាលានៅប្រទេសសិង្ហបុរី Singapore Institute of Management គឺ Cecilia Goh ដែលជា Specialist ជួបគាត់ទាំងអស់គ្នាក្នុង "ពិព័រណ៍អាហារូបករណ៍ និង សាកលវិទ្យាល័យ”។
                    🌟ពិព័រណ៍នេះត្រូវបានរៀបចំដោយ WEduAbroad | WEduShare និងធ្វើឡើងដោយផ្ទាល់នៅ
                   🗓កាលបរិចេ្ឆទ: ថ្ងៃ សៅរ៍ ទី 11 ខែ ឧសភា ឆ្នាំ 2024

                </p>
                <a href="https://forms.office.com/r/PhW39KGEek" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img24.jpg">
                </div>
                <div class="course__info">
                <h4>Leap sovannaroth</h4>
                <p>ស្គាល់គាត់ទេ! គាត់ជាអតីតនិស្សិតអាហារូបករណ៍នៃសាកលវិទ្យាល័យ Beijing Foreign Studies University ប្រទេសចិន!

                    ជាពិសេស គាត់ក៏មានវត្តមានក្នុងពិព័រណ៍អាហារូបករណ៍  </p>
                <a href="https://forms.office.com/r/PhW39KGEek" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img32.jpg">
                </div>
                <div class="course__info">
                <h4>NappleTalks</h4>
                <p>តេីប្រទេសណាល្អសម្រាប់ការ Build Career ជាង?​ 🧐 | US vs Aus
                    Get the genuine guidance and practical advice you need to achieve your career goals in Australia with GoAllan !
                    With years of experience in career consulting, they've helped countless individuals reach new heights in their careers.
                    GoAllan is based in Melbourne.</p>
                <a href="https://www.facebook.com/NappleTalks/videos/6138861939493545" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img26.jpg">
                </div>
                <div class="course__info">
                <h4>Sok Phirun</h4>
                <p>ចូរទស្សនាវីដេអូរបស់និស្សិតយើងម្នាក់គឺប្អូន Sok Phirun ដែលគាត់ត្រៀមនឹងធ្វើដំណើរទៅបន្តការសិក្សាលើមុខជំនាញ
                      Master of Architecture នៅ Deakin University  ប្រទេសអូស្រ្តាលី🇦🇺។ 
                      ចង់ដឹងថាមុនទៅសិក្សានៅទីនោះត្រូវមានការរៀបចំដូចម្ដេចខ្លះនោះ   </p>
                <a href="https://www.youtube.com/watch?v=2LUed-doDmg" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img27.jpg">
                </div>
                <div class="course__info">
                <h4>Srun Sovanncheat</h4>
                <p>មកទស្សនាវីដេអូពេញកិច្ចសម្ភាសរបស់និស្សិតយើងម្នាក់គឺប្អូន Srun Sovanncheat
                    តោះ!មកទស្សនាវីដេអូកិច្ចសម្ភាសខ្លីៗរបស់និស្សិតយើងម្នាក់គឺប្អូន Srun Sovanncheat ដែលគាត់ត្រៀមនឹងធ្វើដំណើរទៅសិក្សាជំនាញ​ Bachelor of Engineering នៅ Deakin University
                    មកណាត់ជួបជាមួយអ្នកប្រឹក្សារបស់ WEduAbroad ឥឡូវនេះដើម្បីស្វែងយល់បន្ថែម!
                    សាកសួរព័ត៌មានបន្ថែមដោយសេរី និងឥតគិតថ្លៃតាមរយៈ
                </p>
                <a href="https://www.youtube.com/watch?v=uVBL3RlxwCI" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img28.jpg">
                </div>
                <div class="course__info">
                <h4>Vevid</h4>
                <p>វិធីស្វែងរកអាហារូបករណ៍ឲ្យមានប្រសិទ្ធភាព
                    ឆ្ងល់ម៉េចបានគេដឹងពីព័ត៌មានអាហារូបករណ៍?</p> 
                <a href="https://www.facebook.com/veviddayoff/videos/1516461048868949" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img30.jpg">
                </div>  
                <div class="course__info">
                <h4>Chhun Socheat</h4>
                <p>ជិវិតមុននិងក្រោយមករៀនស្រុកក្រៅ 🇰🇭 🇦🇺| My Experience living in Australia 🇰🇭 🇦🇺 + Tips</p>
                <a href="https://www.youtube.com/watch?v=YUOVrlkpuSU&t=46s" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="images/img31.jpg">
                </div>
                <div class="course__info">
                <h4>Youngbruisers</h4>
                <p>អាហារូបករណ៍ទៅរៀននៅកូរ៉េខាងត្បូង ដែលផ្តល់ដោយកម្មវិធី GKS (Global Korean Scholarship) ការដាក់ពាក្យអាហារូបករណ៍
                    
                </p>
                <a href="https://www.facebook.com/youngbruisers/videos/345663990554003" target="_blank" class="btn btn-primary">ស្វែងរកបន្ថែម</a>
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