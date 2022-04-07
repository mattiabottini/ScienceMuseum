<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
        <title> Science Museum </title>
        <link rel="stylesheet" type="text/css" href="./mycss.css">
        <link rel="icon" type="image/x-icon" href="logos/logo.svg">
        <script src="myJS.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
            <header id="header"><br> <img class = "headerImage" src="logos/logo.svg" alt="CNM Logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <div id="disclaimer" > 
            <input type="button" name="close" id="close" value="X" onclick="closeDisclaimer();">
               <p class="redText">ATTENTION!</p> In our museum wearing the mask is mandatory in order to prevent the spread of disease and viruses especially during the Coronavirus (COVID-19) pandemic 
              </div> 
            <article id="contentHome"> 
              <br> <br>
              <h2 id="changeText">Botanical Museum</h2>
                <a class= "bigButton blueVioletBackground" href="./info.html">Info</a>
                <a class= "bigButton redBackground" href="./book.php">Book a visit</a>
            </article>
            <article class="content"> <h2 class="homeTitle"> Our Collections</h2>
                <div class="row">
                    <div class="columnArrive">
                      <img src="logos/plant.png" class="logo" alt="Botany logo"><h3 class="info">Botany</h3>
                      <p class="infoDescription"> 
                      Our botany collection is full of rare plants and flowers typical of the United States. <br><br>Have a look at the botany collection:
                      </p> <br><br>
                      <a class="littleButton blueBackground" href="./botany.php">Botany</a>
                    </div>
                    <div class="columnArrive">
                    <img src="logos/fox.png" class="logo"  alt="Zoology logo"><h3 class="info">Zoology</h3>
                      <p class="infoDescription"> 
                      Our zoology collection is full of rare and very colorful animals belonging to different habitats. <br><br>Have a look at the zoology collection:
                      </p> <br><br>
                      <a class="littleButton redBackground" href="./zoology.php">Zoology</a>
                    </div>
                    <div class="columnArrive">
                      <img src="logos/mineral.png" class="logo"  alt="Mineralogy logo"><h3 class="info">Mineralogy</h3>
                      <p class="infoDescription"> 
                      Our mineralogy collection is filled with rare and very precious minerals of different categories. <br><br>Have a look at the mineralogy collection:
                      </p> <br><br>
                      <a class="littleButton orangeBackground" href="./mineralogy.php">Mineralogy</a>
                      </div>
                  </div>           
            </article> <br><br>
            <h2 class="homeTitle"> Information about the Museum</h2>
            <article class="content"> 
                <div class="row">
                    <div class="imageColumn leftColumn">
                        <img class="extraImage" src="images/traffic.jpg" alt="Means of transport">
                    </div>
                    <div class="column rightColumn">
                      <h3 class="info">Do you want basic information before visiting the museum?</h3>
                      <p class="infoDescription">If you want to know: </p> <br>
                      <ul>
                          <li class="indexBlock">More details about the visits</li>
                          <li class="indexBlock">How to arrive to the museum</li>
                      </ul>
                      <p class="infoDescription">It is possible to check:</p><br><br><br>
                      <a class="littleButton greenBackground" href="./info.html">Info about the museum</a><br><br><br>
                    </div>
                  </div>
            </article> <br><br>
            <h2 class="homeTitle"> Visit the Museum</h2>
            <article class="content"> 
                <div class="row">
                    <div class="column leftColumn">
                    <h3 class="info">Do you want to visit the museum?</h3>
                      <p class="infoDescription">There's the possibility to have: </p> <br>
                      <ul>
                          <li class="indexBlock">Basic Visit (no reservation needed)</li>
                          <li class="indexBlock">Guided Visit (reservation is mandatory)</li>
                      </ul>
                      <p class="infoDescription">It is possible to book a guided visit only through the form:</p><br><br><br>
                      <a class="littleButton redBackground" href="./book.php">Book a Guided Visit</a> <br><br><br>
                    </div>
                    <div class="imageColumn rightColumn">
                      <img class="extraImage" src="images/guidedvisit.jpg" alt="Guided vist in the museum">
                    </div>
                  </div>
            </article> <br><br>
            <h2 class="homeTitle"> Contact Us</h2>
            <article class="content"> 
                <div class="row">
                    <div class="imageColumn leftColumn">
                        <img class="extraImage" src="images/contactus.jpg" alt="Contact Us">
                    </div>
                    <div class="column rightColumn">
                      <h3 class="info">Do you want further information?</h3>
                      <p class="infoDescription">If you want to: </p> <br>
                      <ul>
                          <li class="indexBlock">Know something that you can't find on the website</li>
                          <li class="indexBlock">Cancel your reservation for a guided visit</li>
                      </ul>
                      <p class="infoDescription">It is possible to submit the following form:</p><br><br><br>
                      <a class="littleButton blueBackground" href="./contact.html">Contact Us</a>
                    </div>
                  </div>
            </article> <br><br>
            <div class="navbar">
                <a href="./index.php">Home</a>
                <div class="subnav">
                  <button class="subnavbtn">Collections</button>
                  <div class="subnav-content">
                    <a href="./botany.php">Botany</a>
                    <a href="./zoology.php">Zoology</a>
                    <a href="./mineralogy.php">Mineralogy</a>
                  </div>
                </div>
                <div class="subnav">
                  <button class="subnavbtn">Visit</button>
                  <div class="subnav-content">
                    <a href="./info.html">Info</a>
                    <a href="./book.php">Book a visit</a>
                  </div>
                </div>
                <a href="./contact.html">Contact</a>
              </div>
              <footer id="footer"> CNM &copy; Copyright 2022 - All rights reserved</footer>
    </body>
</html>