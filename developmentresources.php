<!doctype HTML>
<!-- nessumsar -->
<head>
        <title>Greg Rasmussen - Website Designer and Developer - Development Resources</title>
        <!-- stylesheets -->    
    <?php require 'includes/stylesheets.php';?>
</head>
<body>
<a id="topofpage"></a>
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
    <div class="mainbodyimagedevelopmentresources">

    </div>
    
    <!-- "1" between main body image and image menu -->
    <div class="bodytextbackground">
            <div class="bodytextbackgroundpattern"><div class="bodytextbackgroundr">r</div></div>
    
    <!-- circle and intro -->
    <div>
        <div class="title">
            <div class="titlecircle"></div>
            <h1 class="h1text">Development Resources</h1>
            <div class="textresize">
                <button class="buttontextresize" onclick="document.getElementById('bodytext').classList.toggle('bodytextevenlarger');">Resize Text</button>
            </div>
        </div>
    </div>
    
    <!-- blurb -->
    <div class="bodytext" id="bodytext">
        <h2 class="h2text"><i class="fab fa-youtube"></i> YouTube Inspiration</h2>
        <script src="scripts/data-youtubeinspiration.js"></script>
        <script src="scripts/youtubeinspiration.js"></script>
        
        <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>

        <h2 class="h2text aboutmebuttonmargin"><i class="fas fa-globe-americas"></i> Website Tools</h2>
        <script src="scripts/data-websitetools.js"></script>
        <script src="scripts/websitetools.js"></script>
        
        

    </div>

    <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>

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