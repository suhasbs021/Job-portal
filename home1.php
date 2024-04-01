
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css" />
    <style>
        body {
            background-image: url('it_jobs.jpg');
        }
        
        .main {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url('it_jobs.jpg');
            background-position: center;
            background-size: cover;
            height: 100vh;
        }
    </style>
</head>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">JOB PORTAL</h2>
            </div>
            

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="empcompany.php">COMPANY</a></li>
                    <li><a href="emphiringnow.php">HIRING NOW</a></li>
                    <li><a href="empaboutus.html">ABOUT US</a></li>
                    <li><a href="empcontactus.html">CONTACT</a></li>
                  
                    <li><a href="profile.php?id=<?= '$userid'; ?>">PROFILE</a></li>

                    <li><a href="logout.php">LOGOUT</a></li>

                    <li><a href="login2.php">POST JOB</a></li>
                </ul>
            </div>


        </div>
        <div class="content">
            <h1>Job Portal <br><span>Management</span> <br>System</h1>
            <p class="par"></p>

            <button class="cn"><a href="#">start</a></button>


        </div>
    </div>
    </div>
    </div>
    <script src="it_jobs.jpg"></script>
</body>

</html>