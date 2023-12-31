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
    <title>my resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/cvstyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/mainstyle.css">


</head>

<body>
    <div class="row-menu" id="header" >
        <div id="dropdown-menu" >
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
    

  
    
    <div class="main">
        
        <div id="header-cv">
            <div class="profile-pic">
                <img src="../images/anime-pic.png">
            </div>
            <div class="title-name">
                <b>Hiba Al Rammal </b>
            </div>
        </div>
        <div id="content">
            <div id="left-side">
                <h2 class="title"> Contact</h2>
                <ul>
                    <li><i class="fa fa-envelope"></i>
                        hiba.alrammal@lau.edu</li>
                    <li><i class="fa fa-phone"></i>
                        81027613</li>
                    <li><i class="fa fa-map">
                        </i> Beirut, Lebanon</li>
                </ul>
                <h2 class="title"> Soft Skills</h2>
                <ul>
                    <li>Leadership</li>
                    <li>Communication</li>
                    <li>Team Building</li>
                    <li>Public Speaking</li>
                    <li>Management</li>
                </ul>

                <h2 class="title">Technical skills</h2>
                <ul>
                    <li>Java </li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:90%;"></div>
                    </div>
                    <li> SQL</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:90%;"></div>
                    </div>
                    <li>HTML</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:70%;"></div>
                    </div>
                    <li>CSS</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:70%;"></div>
                    </div>
                    <li>C</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:70%;"></div>
                    </div>
                </ul>
                <h2 class="title">Languages</h2>
                <ul>
                    <li> English</li>
                    <li>Arabic</li>
                </ul>
            </div>
            <div id="right-side">

                <h2 class="title"> Education</h2>
                <h3 class="subtitle">Lebanese American University (LAU) </h3>
                <p class="date">Sept 2021 to present</p>
                <ul>
                    <li>BS in Computer Science </li>
                    <li>GPA: 3.85</li>
                    <li>Expected Date of Graduation: June 2024</li>
                </ul>
                <h2 class="title"> Experience</h2>
                <h3 class="subtitle">CME Offshore (Beirut, Lebanon) </h3>
                <p class="date">Jul 2023 to Sept 2023</p>

                <ul>
                    <li>Position: Full Stack Web Development </li>
                    <ul>
                        <li class="subtitle">
                            <strong>Responsibility:</strong>
                        </li>
                        <li>Development of a clinic management Web Application </li>
                        <li>Technologies: Spring-Boot-Java, React.Js, PostgreSQL</li>


                    </ul>
                </ul>
                <h3 class="subtitle">AIESEC in Lebanon</h3>
                <p class="date">Aug 2021 to Jan 2022</p>
                <ul>
                    <li>Position: Talent Manager</li>
                    <ul>
                        <li class="subtitle">
                            <strong>Responsibility:</strong>
                        </li>
                        <li>Plan and organize leadership events among members/ non-members</li>
                        <li>Asses members and send reports with details about their changes/improvement</li>
                    </ul>
                </ul>

                <h2 class="title"> Extracurricular Activities</h2>
                <h3 class="subtitle">Volunteering at NGOS: Irshad and Islah - Ibad Al Rahman</h3>
                <!-- <p class="date">2020 to present</p> -->
                <ul>
                    <li> Arranging and hosting educational events for orphans </li>
                    <li> Interviewing beneficiaries and updating their applications </li>
                    <li> Interviewing beneficiaries and updating their applications </li>
                </ul>
                <h2 class="title">Certifications</h2>
                <ul>

                    <li><strong>Certificate of Participation: </strong>Data Science and AI hosted by WIE – Lebanon in
                        collaboration with Beirut AI (Feb 2022) </li>

                    <li><strong>Certificate of Recognition</strong> Certified Microsoft Innovative Educator (MIE) (Nov
                        2021)</li>

                </ul>
            </div>
        </div>

    </div>
</body>


</html>