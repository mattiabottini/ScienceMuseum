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
                      <a class="contact" href="./zoology.php" style="background-color:red;">Zoology</a>
                    </div>
                    <div class="columnArrive">
                      <img src="logos/mineral.png" width="35px" height="40px" style="padding-top: 1em;"><h3 class="info">Mineralogy</h3>
                      <p class="infoDescription"> 
                      Our mineralogy collection is filled with rare and very precious minerals of different categories. <br><br>Have a look at the mineralogy collection:
                      </p> <br><br>
                      <a class="contact" href="./mineralogy.php" style="background-color:orange;">Mineralogy</a>
                      </div>
                  </div>           
            </article> <br><br>
            <h2 class="homeTitle"> Visit the Museum</h2>
            <article id="content"> 
                <div class="row">
                    <div class="column">
                      <h3 class="info">Basic Visit</h3>
                      <p class="infoDescription">The basic visit to the museum is completely free, a reservation is not necessary.<br><br>Cost: <br><br> Adults: 10$ <br> Children (maximum 14 years old): 5$</p> <br> 
                      <p class="infoDescription">To cancel a reservation or further information:</p><br><br>
                      <a class="contact" href="./contact.html">Contact Us</a>
                    </div>
                    <div class="column">
                      <h3 class="info">Guided Visit</h3>
                      <p class="infoDescription">The guided visit to the museum (only morning) costs: <br><br> 20$/person (no age distinction). <br><br>The reservation is mandatory.</p> <br>
                      <p class="infoDescription">It is possible to book a guided visit only through the form:</p><br><br><br>
                      <a class="infoBook" href="./book.html">Book a Guided Visit</a>
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