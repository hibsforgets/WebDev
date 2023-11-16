
<?php
    // Start or resume the session
    session_start();
    
    // Check if the username session variable is not set
    if (!isset($_SESSION["username"])) {
        // Redirect to the login page if not logged in
        header("Location:../pages/index.php");
        exit();
    }
    // Read the JSON file
    $jsonFilePath = '../data/gallery.json';

    if (file_exists($jsonFilePath)) {
        $jsonFile = file_get_contents($jsonFilePath);
        $imageData = json_decode($jsonFile, true);

    } 
    else {
    // Handle the case where the JSON file is missing or inaccessible
    // For example, you might want to display an error message or log the issue
    // You can customize this based on your application's requirements
        echo "Error: JSON file not found or inaccessible.";
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

    <div class="gallery">
        <div class="row">
            <?php
            // Loop through the images and generate thumbnails
            foreach ($imageData['images'] as $imageName) {
                echo '
                <div class="thumbnail">
                    <a href="#lightbox-' . pathinfo($imageName, PATHINFO_FILENAME) . '">
                        <img src="../images/' . $imageName . '" alt="Gallery Image">
                    </a>
                    <div id="lightbox-' . pathinfo($imageName, PATHINFO_FILENAME) . '" class="lightbox">
                        <img src="../images/' . $imageName . '" alt="Enlarged Image">
                        <a href="#" class="back-button">Go Back</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    
</body>

</html>