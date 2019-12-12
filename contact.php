<!doctype HTML>
<!-- nessumsar -->
<head>
    <title>Greg Rasmussen - Website Designer and Developer - Contact Me</title>
    <!-- stylesheets -->    
    <?php require 'includes/stylesheets.php';?>
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
    <div class="contactbodyimage">
        
    </div>
    
    <!-- "1" between main body image and image menu -->
    <div class="bodytextbackground">
            <div class="bodytextbackgroundpattern"><div class="bodytextbackgroundr">r</div></div>
    
    <!-- circle and intro -->
    <div>
        <div class="title">
            <div class="titlecircle"></div>
            <h1 class="h1text">Contact Me</h1>
            <div class="textresize">
                <button class="buttontextresize" onclick="document.getElementById('bodytext').classList.toggle('bodytextevenlarger');">Resize Text</button>
            </div>
        </div>
    </div>
    
    <!-- blurb -->
    <div class="bodytext" id="bodytext">
        <h2>Feel free to reach out to me regarding inquiries or opportunities</h2>
        <br>
        <br>
        <h2><i class="fab fa-instagram" style="padding-right: 30px;"></i><a class="h2link" href="https://www.instagram.com/razzie13/"> @razzie13</a></h2>
        <h2><i class="fab fa-twitter-square" style="padding-right: 30px;"></i><a class="h2link" href="https://twitter.com/razzie13"> @razzie13</a></h2>
        <h2><i class="fab fa-linkedin" style="padding-right: 30px;"></i><a class="h2link" href="https://www.linkedin.com/in/gregrasmussen/"> Greg Rasmussen</a></h2>
        <br>
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

<!-- logo radio waves script 
<script src="scripts/logoradiowaves.js"></script>
-->
</body>
</html>