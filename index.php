<html>
    <head>
      <meta charset="UTF-8">
        <title> Science Museum </title>
        <link rel="stylesheet" type="text/css" href="./book.css">
        <link rel="icon" type="image/x-icon" href="./logo.svg">
        <script src="HomePageJS.js"></script>
    </head>
    <body>
            <header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <div id="disclaimer" > 
            <input type="button" name="close" id="close" value="X" onclick="closeDisclaimer();">
               <p>ATTENTION!</p> In our museum wearing the mask is mandatory in order to prevent the spread of disease and viruses especially during the Coronavirus (COVID-19) pandemic 
              </div> 
            <article id="contentHome"> 
              <br> <br>
              <h2 id="changeText">Botanical Museum</h2>
                <a class= "infoHome" href="./info.html">Info</a>
                <a class= "bookHome" href="./book.html">Book a visit</a>
            </article>
            <article id="content"> <h2 class="homeTitle"> Our Collections</h2>
                <div class="row">
                    <div class="columnArrive">
                      <img src="logos/plant.png" width="30px" height="40spx" style="padding-top: 1em;"><h3 class="info">Botany</h3>
                      <p class="infoDescription"> 
                      Our botany collection is full of rare plants and flowers typical of the United States. <br><br>Have a look at the botany collection:
                      </p> <br><br>
                      <a class="contact" href="./botany.php">Botany</a>
                    </div>
                    <div class="columnArrive">
                    <img src="logos/fox.png" width="30px" height="40spx" style="padding-top: 1em;"><h3 class="info">Zoology</h3>
                      <p class="infoDescription"> 
                      Our zoology collection is full of rare and very colorful animals belonging to different habitats. <br><br>Have a look at the zoology collection:
                      </p> <br><br>
                      <a class="infoBook" href="./zoology.php">Zoology</a>
                    </div>
                    <div class="columnArrive">
                      <img src="logos/mineral.png" width="35px" height="40px" style="padding-top: 1em;"><h3 class="info">Mineralogy</h3>
                      <p class="infoDescription"> 
                      Our mineralogy collection is filled with rare and very precious minerals of different categories. <br><br>Have a look at the mineralogy collection:
                      </p> <br><br>
                      <a class="mineralogy" href="./mineralogy.php">Mineralogy</a>
                      </div>
                  </div>           
            </article> <br><br>
            <h2 class="homeTitle"> Information about the Museum</h2>
            <article id="content"> 
                <div class="row">
                    <div class="column" style="background-image: url('./kokia.jpeg'); margin-right: 0px;">
                    </div>
                    <div class="column" style="margin-left: 0px;">
                      <h3 class="info">Do you want basic information before visiting the museum?</h3>
                      <p class="infoDescription">If you want to know: </p> <br>
                      <p class="infoDescription"><ul>
                          <li class="indexBlock">More details about the visits</li> <br>
                          <li class="indexBlock">How to arrive to the museum</li> <br>
                        </ul></p>
                      <p class="infoDescription">It is possible to check:</p><br><br><br>
                      <a class="infoBook" href="./info.html" style="background-color:green;">Info about the museum</a>
                    </div>
                  </div>
            </article> <br><br>
            <h2 class="homeTitle"> Visit the Museum</h2>
            <article id="content"> 
                <div class="row">
                    <div class="column" style="margin-right: 0px;">
                    <h3 class="info">Do you want to visit the museum?</h3>
                      <p class="infoDescription">There's the possibility to have: </p> <br>
                      <p class="infoDescription"><ul>
                          <li class="indexBlock">Basic Visit (no reservation needed)</li> <br>
                          <li class="indexBlock">Guided Visit (reservation is mandatory)</li> <br>
                        </ul></p>
                      <p class="infoDescription">It is possible to book a guided visit only through the form:</p><br><br><br>
                      <a class="infoBook" href="./book.html">Book a Guided Visit</a>
                    </div>
                    <div class="column" style="background-image: url('./blackFootedFerret.jpeg'); margin-left: 0px;">
                    </div>
                  </div>
            </article> <br><br>
            <h2 class="homeTitle"> Contact Us</h2>
            <article id="content"> 
                <div class="row">
                    <div class="column" style="background-image: url('./caclite.jpeg'); margin-right: 0px;">
                    </div>
                    <div class="column" style="margin-left: 0px;">
                      <h3 class="info">Do you want further information?</h3>
                      <p class="infoDescription">If you want to: </p> <br>
                      <p class="infoDescription"><ul>
                          <li class="indexBlock">Know something that you can't find on the website</li> <br>
                          <li class="indexBlock">Cancel your reservation for a guided visit</li> <br>
                        </ul></p>
                      <p class="infoDescription">It is possible to submit the following form:</p><br><br><br>
                      <a class="contact" href="./contact.html">Contact Us</a>
                    </div>
                  </div>
            </article> <br><br>
            <div class="navbar">
                <a href="./index.php">Home</a>
                <div class="subnav">
                  <button class="subnavbtn">Collections <i class="fa fa-caret-down"></i></button>
                  <div class="subnav-content">
                    <a href="./botany.php">Botany</a>
                    <a href="./zoology.php">Zoology</a>
                    <a href="./mineralogy.php">Mineralogy</a>
                  </div>
                </div>
                <div class="subnav">
                  <button class="subnavbtn">Visit <i class="fa fa-caret-down"></i></button>
                  <div class="subnav-content">
                    <a href="./info.html">Info</a>
                    <a href="./book.html">Book a visit</a>
                  </div>
                </div>
                <a href="./contact.html">Contact</a>
              </div>
            <footer id="footer"> &copy Copyright 2022 - Mattia Bottini </footer>
    </body>
</html>