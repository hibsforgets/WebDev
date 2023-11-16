<!DOCTYPE html>

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/menu.css">

    <style>
        body {
            background: url(../images/deathnote.jpg) no-repeat center center fixed;
        }
    </style>
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
            echo '<span class="logout-span">' . $_SESSION["username"] . '</span>';
            echo '<a class="logout-span" style="margin-left: 15px; color: white; font-size:10px text-decoration: none;" href="../BE/logout.php">LogOut</a>';
        
        ?>

    </div>

    <div>
        <div id="fixed-header" style="color: black;">
            <div style="padding: 10px"> Welcome, <?php echo $_SESSION["username"]; ?>!</div>
        </div>
    </div>

</body>
</html>
