<?php 
session_start();
session_unset();
session_destroy();
?>


<html>
    <head>
        <link rel="stylesheet" href="../css/login.css"> 
        <link rel="stylesheet" href="../css/mainstyle.css"> 
     
        <title>
            Login
        </title>
    </head>
    <body>
    <div class="background-image"></div>
        <div class="row header " >
            
        </div>
       
    <div class="card">
        <h2>Log In</h2>
        <div class="form">
            <form action="../BE/login.php" method="POST" id="login-form">
                <label for="un"> UserName</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <input class="button" type="button" value="Login" onclick="login()">
            </form>
            <div style="margin-top: 60px;">
                <span>Not Registered Yet?</span>
                
                        <a class = "span-a" href="signup.html">Sign Up...</a>
                    
            </div>
        </div>
    </div>

    <script>
        function login(){
            var un=document.getElementById("un").value;
            var pass=document.getElementById("pass").value;
            if ((un=="")||(pass=="")){
                alert("You must fill in the username and the password!");
            }else{
                document.getElementById("login-form").submit();
            }
    
        }
        function ClearForm(){
            document.getElementById("un").value="";
            document.getElementById("pass").value="";
        }
    </script>
    </body>
    </html>
    