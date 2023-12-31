<?php
    // Start or resume the session
    session_start();
    
    // Check if the username session variable is not set
    if (!isset($_SESSION["username"])) {
        // Redirect to the login page if not logged in
        header("Location:../index.php");
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact Us</title>

</head>

<body>
    <div class="row-menu" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="main.php">
                        <li>Main</li>
                    </a>
                    <a href="cv.php">
                        <li>Resume</li>
                    </a>
                    <a href="gallery.php">
                        <li>Gallery</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </div>
        <?php
            echo '<span class="logout-span" >' . $_SESSION["username"] . '</span>';
            echo '<a class="logout-span" style="margin-left: 15px; color: white; font-size:10px text-decoration: none;" href="../BE/logout.php">LogOut</a>';
        
        ?>

    </div>
    <div id="fixed-header">
        <div style="padding: 10px;  ">Contact Us</div>
    </div>



    <div id="top-cards-container">
        <div class="card">
            <section>
                <i class="ico ico-contact location-ico "></i>
                <h2>Location</h2>
                <p>Lebanon, Beirut</p>
            </section>
        </div>

        <div class="card">
            <section>
                <i class="ico ico-contact phone-ico "></i>
                <h2>Telphone</h2>
                <p>+961 01 999 888</p>
            </section>
        </div>

        <div class="card">
            <section>
                <i class="ico ico-contact mobile-ico "></i>
                <h2>Mobile</h2>
                <p>+961 81 027 613</p>
            </section>
        </div>

        <div class="card">
            <section>
                <i class="ico ico-contact email-ico "></i>
                <h2>Email</h2>
                <p>hiba.alrammal@lau.edu</p>
            </section>
        </div>
    </div>

    <div id="social-media-card">
        <div class="card" >

            <h2 style="margin-top: 40px; color: black;">Reach Out Through Social Media </h2>
            <div class="social-media">
                <a href="https://www.instagram.com/hibalrammal">
                    <i class="ico social-media insta-ico"></i>@hibalrammal
                </a>
            </div>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/hiba-al-rammal-2a50b7267?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                    <i class="ico social-media lin-ico"></i>hiba al rammal
                </a>
            </div>
            <div class="social-media">
                <a href="https://t.me">
                    <i class="ico social-media tele-ico"></i>Telegram
                   
                </a>
            </div>
            <div class="social-media">
                <a href="https://twitter.com">
                    <i class="ico social-media twitter-ico"></i>eminem & dr.dre
                </a>
            </div>

        </div>
    </div>


</body>

</html>