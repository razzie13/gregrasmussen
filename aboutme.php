<!doctype HTML>
<!-- nessumsar -->
<head>
        <title>Greg Rasmussen - Website Designer and Developer - About Me</title>
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
    <div class="mainbodyimageaboutme"></div>
    
    <!-- "1" between main body image and image menu -->
    <div class="bodytextbackground">
            <div class="bodytextbackgroundpattern"><div class="bodytextbackgroundr">r</div>
        </div>
    
    <!-- circle and intro -->
    <div>
        <div class="title">
            <div class="titlecircle"></div>
            <h1 class="h1text">A Bit About Me</h1>
            <div class="textresize">
                <button class="buttontextresize" onclick="document.getElementById('bodytext').classList.toggle('bodytextevenlarger');">Resize Text</button>
            </div>
        </div>
    </div>
    
    <!-- toggle between different sections using buttons -->
    <div class="buttontextmenu">
    <script>
        function show(elementId) {
            document.getElementById('webdevjourney').style.display="none";
            document.getElementById('mycareer').style.display="none";
            document.getElementById('neatstuff').style.display="none";
            document.getElementById(elementId).style.display="block";
        }
    </script>
        <button class="redbutton" onclick="window.location.href = '#webdevjourney';">Web Dev Journey</button>
        <button class="yellowbutton" onclick="window.location.href = '#mycareer';">My Career</button>
        <button class="greenbutton" onclick="window.location.href = '#neatstuff';">Neat Stuff</button>
    </div>

    <!-- blurb -->
    <div class="bodytext bodytextaboutmedesktop bodytextaboutmemobile bodytextaboutmetablet" id="bodytext"><!-- increased margin on this page only due to adding of buttons found in extra css class-->
            
            <div id="webdevjourneyheader"><a id="#webdevjourney"></a>
            <h2 class="h2textaboutme"><i class="fab fa-canadian-maple-leaf"></i> <span class="hidemobile">My </span>Web Dev<span class="hidemobile">elopment</span> Journey</h2>
            
            <script src="scripts/data-webdevjourney.js"></script>
            <script src="scripts/webdevjourney.js"></script>          
            </div>

            <button class="bluebutton" onclick="window.location.href='#topofpage';">Back to Top</button>
            <!--<button class="aboutmesecondbutton" onclick="window.location.href = '#neatstuff';">Neat Stuff</button>-->

            <div id="mycareerheader aboutmebuttonmargin"><a id="mycareer"></a>
            <h2 class="h2text aboutmebuttonmargin"><i class="fas fa-shopping-cart"></i> My Career</h2>
            <script src="scripts/data-mycareer.js"></script>
            <script src="scripts/mycareer.js"></script> 
            </div>

            <button class="bluebutton" onclick="window.location.href = '#topofpage';">Back to Top</button>
            <!--<button class="yellowbutton" onclick="window.location.href = '#mycareer';">My Career</button>-->
            
            <div id="neatstuffheader"><a id="neatstuff"></a>         
            <h2 class="h2text aboutmebuttonmargin"><i class="fas fa-bicycle"></i> Personal Accomplishments</h2>
            <p>In the Summer of 2012, I decided to see if I could ride my bicycle 1000km in the month of June in my spare time. With a little over two hours to go, I finished the goal - right in front of a McDonalds restaurant - and treated myself to a McFlurry since it's the only time nobody would ever tell me I shouldn't have one.</p>
            <p>After accomplishing this feat, I wanted to see which destinations would be 1000km away by bicycle. New York City came in at 979km. Good enough for me. After spending considerable time plotting out the route, fixing the bike, acquiring needed accessories, and doing long test rides, I took off on July 26th, 2013</p>
            <p>The trip took a total of 13 days, including one rest day and one day taking a side trip to a nearby city. I stayed in hostels, motels, and friends' homes along the way. Trails that followed canals and old rail lines kept me off of roadways about 70% of the trip.</p>
            </div>
            
            <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>
            <br>
            <br>
            <br>
    </div>

    </div> <!-- closes "1" commented tag -->
    
    <br>

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