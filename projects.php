<!doctype HTML>
<!-- nessumsar -->
<head>
    <title>Greg Rasmussen - Website Designer and Developer - Web Dev Projects</title>
    <!-- stylesheets -->    
    <?php require 'includes/stylesheets.php';?>
</head>
<body>
<a id="#topofpage"></a>
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
    <div class="mainbodyimageprojects">

    </div>
    
    <!-- "1" between main body image and image menu -->
    <div class="bodytextbackground">
            <div class="bodytextbackgroundpattern"><div class="bodytextbackgroundr">r</div></div>
    
    <!-- circle and intro -->
    <div>
        <div class="title">
            <div class="titlecircle"></div>
            <h1 class="h1text">Web Dev<span class="hidemobile">elopment</span> Projects</h1>
            <div class="textresize">
                <button class="buttontextresize" onclick="document.getElementById('bodytext').classList.toggle('bodytextevenlarger');">Resize Text</button>
            </div>
        </div>
    </div>
    
    <!-- blurb -->
    <div class="bodytext" id="bodytext">

        <h2 class="h2text"><i class="fas fa-tools"></i> Full Web Development Projects</h2>
        <h3><span class="hidemobile"><i class="fas fa-desktop"></i> = Optimized for Desktop <i class="fas fa-tablet-alt" style="padding-left: 50px;"></i> = Optimized for Tablets <i class="fas fa-mobile-alt" style="padding-left: 50px;"></i> = Optimized for Mobile</span></h3>
        
        <h3><a class="h3link h3text" href="sandbox/shoppinglistv10.html">Shopping List</a> <i class="fas fa-mobile-alt"></i></h3>
        <p>Currently on version 10, the main goal of this project is to make a shopping list unlike any I've found tutorials for, using Vanilla JS. It stores the data in arrays instead of JS-created HTML elements, builds out the array data in HTML, adds suggested items to the list based on weekday or month, and all items are colour-coded to indicate if they are bakery, meat, produce, or grocery items.</p>
        <p>In future versions of this project, I would like to get the items to sort by department, and be able to check off any item on the list, instead of whatever is on the top of the list.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>
        
        <h3><a class="h3link h3text" href="sandbox/csstest8.html">Store Map</a> <i class="fas fa-desktop"></i></h3>
        <p>This was built primarily to figure out how to position elements in CSS, but I later decided to build on it, and add interactivity to show people which departments are where in the store.</p>
        <p>In future versions of this project, larger departments will be emphasized, smaller sections removed, and a search feature will add pop-up sections showing where an item is on the map.</p>
        <p>The ultimate goal of this project is to merge it with the shopping list, allowing the user to enter the text, search for the item in the store, and add it to their shopping list at the same time, or vice versa.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>
        
        <h3><a class="h3link h3text" href="index.php">This Website</a> <i class="fas fa-mobile-alt"></i> <i class="fas fa-tablet-alt"></i> <i class="fas fa-desktop"></i></h3>
        <p>This site is a showcase project in itself, having been in the development process for many weeks, starting with wireframes, designing the flow of information, creating mockups with Adobe XD, coding it with Visual Studio Code, inspecting it with Chrome Developer Tools, and finally launching it.</p>
        <p>The design of the site has been heavily influneced by my personal life. The site uses a colours from a pallette named 'Canadian' on the flatuicolors site - fitting since I am Canadian. My lucky number is 13, and I have incorporated this into many of the design elements of the site. There are thirteen paragraphs in the "Web Development Journey" section on the About Me page. <!--There are thirteen rings orbiting from my logo on the top of the page and they start a new release every thirteen seconds. -->The 'r' logo at the top of the page was one I developed first in the early 2000's when I started building personal websites, and serves as a reminder of not only how I started out, but how things have changed since. For instance, the logo used to be a single graphic. Now, it's done in pure CSS.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>

        <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>
        
        <h2 class="h2text aboutmebuttonmargin"><i class="fas fa-hammer"></i> Single-Page Experimenting</h2>
        
        <h3><a class="h3link h3text" href="sandbox/newsapi.html">News Page</a></h3>
        <p>Code-along project, involving a news feed API and building out the page to display the correct data from the feed in the right place. Text Only</p>
        <p>In the future, this may be incorporated into a page that can be displayed on a television screen for live news updates, as well as with other info.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>
        
        <h3><a class="h3link h3text" href="sandbox/cssloader.html">CSS Loader Page</a></h3>
        <p>If you click the link and pull up the page, it will show the same animation on infinite repeat. This animation did not just use CSS, however, but also JavaScript to create each of the 13 "div" elements which the animation cycles through.</p>
        <p>In the future, if I find a use for it on my homepage, it'll appear there. The site is currently designed to load fairly quickly, however, if it hosts video eventually that may change.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>
        
        <h3><a class="h3link h3text" href="sandbox/queryselector.html">Query Selector Page</a></h3>
        <p>Type a number (in text form, and it is not case-sensitive) from one to ten into the search box and click enter. One of the words from the list below the search box will pop up on the bottom of the list. I used it to help learn the querySelector feature in JavaScript.</p>
        <p>In the future, this will be implemented in the Store Map project.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>
        
        <h3><a class="h3link h3text" href="sandbox/csspicturelighting.html">CSS Photo Enhancement</a></h3>
        <p>I used this idea to help me understand CSS effects and positioning. Elements were created, styled to look like lighting, and placed on the page to enhance the photo. Only a handful of enhancements have been completed on this page so far, but more are planned.</p>
        <p>In the future, I will likely use a different photo on my index.php page, with similar enhancements.</p>
        <p><h5><i class="fab fa-github"></i> <a href="#" class="h5link" target=”_blank”>View Code on GitHub</a></h5></p>

        <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>
  
        <h2 class="h2text aboutmebuttonmargin"><i class="fas fa-history"></i> Personal Website Archives from the 2000s</h2>
        
        <h3><a class="h3link h3text" href="https://web.archive.org/web/20030203063719/http://www.razzie.rrnet.net/" target=”_blank”>February 2003</a> <i class="fas fa-external-link-alt"></i></h3>
        <p>The first one archive.org picked up that wasn't tied to a geocities domain. One of my classic table-based designs that were responsive to different screen widths, although back then, designing for 1920p widths was unimaginable!</p>
        
        <h3><a class="h3link h3text" href="https://web.archive.org/web/20030804072835/http://www.razzie.rrnet.net/" target=”_blank”>August 2003</a> <i class="fas fa-external-link-alt"></i></h3>
        <p>This one was inspired by a popular radio station's site at the time, and I must say I was quite happy to make something similar.</p>
        <p>This site featured news and weather pages, as well as much more image-based navigation and a good colour scheme. Looking at it for the first time in over a decade as I'm building this site, I was actually impressed at what I'd built!</p>
        
        <h3><a class="h3link h3text" href="https://web.archive.org/web/20040614013631/http://www.razzie.rrnet.net/" target=”_blank”>June 2004</a> <i class="fas fa-external-link-alt"></i></h3>
        <p>This site is another one of my favourite designs from back then, and I actually kept it for quite a while, partly due to being a busy college student who also pulled 30 hour work weeks. It was table based, and was centered so it was always displayed the way I wanted it to be seen.</p>
        <p>This site had fewer colours, but more consistency, and made use of scripts to create a a php-based photo gallery and a current list of class notes in .doc form that I had uploaded to the site to share with classmates that I did not have to manually update myself.</p>
        
        <h3><a class="h3link h3text" href="https://web.archive.org/web/20071216160933/http://www.razzie.rrnet.net/" target=”_blank”>December 2007</a> <i class="fas fa-external-link-alt"></i></h3>
        <p>This was the last of my personal site designs from the 2000's, and despite being more recent, also has the fewest images available.</p>
        <p>This site stood for several years before we let the domain run out (rrnet, the domain we used, was shared among 3-4 people). The domain now belongs to someone else, however, is not in use.</p>
        
        <button class="bluebutton bluebuttonmarginbottom" onclick="window.location.href = '#topofpage';">Back to Top</button>
        <br>
            <br>
            <br>
    </div>

    <br>

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