<!doctype HTML>
<!-- nessumsar -->
<head>
<a id="topofpage"></a>
    <title>Greg Rasmussen - Website Designer and Developer</title>
    <!-- stylesheets -->    
    <?php require 'includes/stylesheets.php';?>
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
</head>
<body>
    <!-- full screen div -->
    <div class="container">
    <!-- header -->
    <div class="header">
    <?php require 'includes/header.php';?>
        </div>
    
    <!-- main menu -->
    <div class="topmenu">
        <div class="topmenucentered">
            <?php require 'includes/mainmenuitems.php';?>
                </div>
                <?php require 'includes/socialmediaicons.php';?>
        </div>
    </div>
    
    <!-- main body image -->
    <div class="mainbodyimagemain">
        
    </div>
    
    <!-- "1" between main body image and image menu -->
    <div class="bodytextbackground">
            <div class="bodytextbackgroundpattern"><div class="bodytextbackgroundr">r</div></div>
    
    <!-- circle and intro -->
    <div>
        <div class="title">
            <div class="titlecircle"></div>
            <h1 class="h1text">Welcome <span class="hidemobile hidetablet">to gregrasmussen.com</span></h1>
            <div class="textresize">
                <button class="buttontextresize" onclick="document.getElementById('bodytext').classList.toggle('bodytextevenlarger');">Resize Text</button>
            </div>
        </div>
    </div>
    
    <!-- blurb -->
    <div class="bodytext" id="bodytext">
    <!--   main text and picture area  --> 
    <div class="photoandstats">    
    <div class="mainpagebodyphoto">

        </div>
        <div class="mainpagevitalstats">
            <p>Hello! And thank you for visiting.</p>
            <p>My name is Greg, and I built my first website over a decade ago using WYSIWYG editors, image editing software, and a little help from some good people.</p>
            <p>Today, I mock up websites in Adobe XD, build those websites in Visual Studio Code, style them with CSS using SASS, add functionality with custom JavaScript, and make them easier to operate by storing data in JSON format, as well as using PHP to make maintaining sections of sites easier.</p>
            <p>As you explore this site, you'll find details of my <a href="aboutme.php#webdevjourney" class="h3link" style="text-decoration: underline">web development journey</a>, examples of <a href="projects.php" class="h3link" style="text-decoration: underline">projects</a> I've built to apply the knowledge I've gained, and I'll show you <a href="developmentresources.php" class="h3link" style="text-decoration: underline">how I learned</a> what I have learned.</p>
            <p>Once again, thank you for stopping by. If you wish to contact me, you will find several methods of contacting me <a href="contact.php" class="h3link" style="text-decoration: underline">here</a>.</p>
            <p></p>
            <p class="signature">Greg Rasmussen</p>
        </div> 
    </div>
        <!--  END main text and picture area --> 
    </div>

    </div> <!-- closes "1" commented tag -->
    
    <!-- full image menu -->
    <div class="imagemenu">
    <?php require 'includes/imagemenu.php';?>
    </div>
    
    <!-- footer -->
    <div class="footer">
        <div class="footercentered">
        <?php require 'includes/footercenteredleft.php';?>
        <?php require 'includes/footercenteredright.php';?>
        </div>
    </div>

    <!-- close full screen div -->
</div>
</body>
</html>