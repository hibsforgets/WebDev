
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
            <?php
            // Read the JSON file
            $jsonFile = file_get_contents('../data/gallery.json');
            $imageData = json_decode($jsonFile, true);

            // Loop through the images and generate thumbnails
            foreach ($imageData['images'] as $imageName) {
                echo '
                <div class="thumbnail">
                    <div class="imgs">
                        <input type="checkbox" name="" id="' . pathinfo($imageName, PATHINFO_FILENAME) . '">
                        <label for="' . pathinfo($imageName, PATHINFO_FILENAME) . '">
                            <img src="../images/' . $imageName . '">
                        </label>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>

</html>