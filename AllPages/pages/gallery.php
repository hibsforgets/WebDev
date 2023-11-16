
<?php
    // Start or resume the session
    session_start();
    
    // Check if the username session variable is not set
    if (!isset($_SESSION["username"])) {
        // Redirect to the login page if not logged in
        header("Location:../pages/index.php");
        exit();
    }
    ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>gallery</title>
    <link rel="stylesheet" href="../css/gallerystyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/mainstyle.css">

</head>

<body>
    <div class="row-menu" id="header" style="margin-top: 0px; padding: 0px;  ">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="main.php">
                        <li>Main</li>
                    </a>
                    <a href="cv.php">
                        <li> Resume</li>
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
    <div id="fixed-header"> <div style="padding: 10px;"> Gallery</div> </div>

    <div class="gallery" style="margin-top: 30px;">

        <div class="row">

            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom1">
                    <label for="zoom1">
                        <img src="../images/image1.jpg">
                    </label>
                </div>
                <!-- <div class="desc">Henry</div> -->
            </div>


            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom2">
                    <label for="zoom2">
                        <img src="../images/image2.webp">
                    </label>
                </div>
                <!-- <div class="desc">Ocean Eyes</div> -->
            </div>

            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom3">
                    <label for="zoom3">
                        <img src="../images/image3.webp">
                    </label>
                </div>
                <!-- <div class="desc">The Real Superman</div> -->
            </div>

        </div>
        <div class="row">

            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom4">
                    <label for="zoom4">
                        <img src="../images/image4.avif">
                    </label>
                </div>
                <!-- <div class="desc">Is Henry Real?</div> -->
            </div>

            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom5">
                    <label for="zoom5">
                        <img src="../images/image5.avif">
                    </label>
                </div>
                <!-- <div class="desc">Best of the Best</div> -->
            </div>

            <div class="thumbnail">
                <div class="imgs">
                    <input type="checkbox" name="" id="zoom6">
                    <label for="zoom6">
                        <img src="../images/image6.jpg">
                    </label>
                </div>
                <!-- <div class="desc">Out of this World</div> -->
            </div>

        </div>
    </div>
</body>

</html>