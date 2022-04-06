<!DOCTYPE html>
<html>
    <head>
        <title> Book a Visit </title>
        <link rel="stylesheet" type="text/css" href="./book.css">
        <script src="HomePageJS.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="./logo.svg">
    </head>
    <body>
                <!--Script useful to execute query on the DB, delete reservations prior to today's-->
        <?php
            $servername = "localhost";
            $con = mysqli_connect($servername, "root", "root");

            // Check connection
            if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
        
            mysqli_select_db($con,"mydb");
            $d = date("Y-m-d", strtotime('today'));
            $sql = "DELETE FROM `reservation` WHERE `dates` < '$d'";
            if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error($con)); }
            mysqli_close($con);
        ?>
        <header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <article id="content"> <h1>Book a Guided Visit</h1> <br>
                  <form name="reservationForm" action="reservation.php" method="post">
                    <label for="firstName">First Name:</label> 
                    <input type="text" name="firstName" id="firstName" required> <br><br>
                    <label for="familyName">Family Name: </label>
                    <input type="text" name="familyName" id="familyName" required> <br><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required> <br><br>
                    <label for="number">Number of people:</label>
                    <select name="number" id="number" required>
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select><br><br>
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date" onclick="getToday();" required> <br> <br>
                    <label for="timeslot">Timeslot:</label>
                    <select name="timeslot" id="timeslot" required>
                      <option value="firstslot" selected>9:00-10:00</option>
                      <option value="secondslot">10:00-11:00</option>
                      <option value="thirdslot">11:00-12:00</option>
                      <option value="fourthslot">12:00-13:00</option>
                    </select><br><br>
                    <input type="submit" name="submit" id="submit" value="Submit" onclick="checkForm();">
                    <input type="reset" name="reset" id="reset" value="Reset"> <br><br>
                  </form>
                  <br> <hr> <br> <br>
                  <article id="timesDescription"><p class="infoDescription"> 
                    <ul>
                      <li><p style="color: blue;">OPEN (GUIDED visits)</p> every day at morning for guided visits: <br>9-10 (1^slot), 10-11 (2^slot), 11-12 (3^slot), 12-13 (4^slot)</li> <br>
                      <li>Tuesday, Friday afternoon :   <p style="color: red;">CLOSED</p>(15:00-18:00)</li> <br>
                      <li>Monday, Wednesday, Thursday, Saturday, Sunday afternoon :<br><p style="color: blue;">OPEN (ONLY BASIC visits)</p>(15:00-18:00)</li> <br>
                    </ul>
                    </p>
                   </article> 
                  <table id="times" cellpadding="5">
                    <tr>
                        <td>
                            <b>Day/Period</b></br>
                        </td>
                        <td>
                            <b>9:00-10:00</b><br>
                            <b>1^slot</b>
                        </td>
                        <td>
                            <b>10:00-11:00</b><br>
                            <b>2^slot</b>
                        </td>
                        <td  >
                          <b>11:00-12:00</b><br>
                          <b>3^slot</b>
                        </td> 
                        <td   >
                            <b>12:00-13:00</b><br>
                            <b>4^slot</b>
                        </td>
                        <td  >
                            <b>13:00-14:00</b>
                        </td>
                        <td  >
                            <b>15:00-16:00</b>
                        </td>
                        <td>
                            <b>17:00-18:00</b>
                        </td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Monday</b></td>
                            <td class="guided"><b>OPEN (Guided Visit)</td>
                            <td class="guided"><b>OPEN (Guided Visit)</td>
                            <td class="guided"><b>OPEN (Guided Visit)</td>
                            <td class="guided"><b>OPEN (Guided Visit)</td>
                        <td rowspan="7" >
                            <h3>L<br>U<br>N<br>C<br>H<br><br>B<br>R<br>E<br>A<br>K</h3>
                        </td>
                        <td colspan="2" class= "open"><b>OPEN</b></td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Tuesday</b>
                        </td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                          <td class="guided" ><b>OPEN (Guided Visit)</td>
                          <td class="guided" ><b>OPEN (Guided Visit)</td>
                          <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td colspan="2" class="closed" ><b>CLOSED</b></td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Wednesday</b>
                        </td>
                            <td class="guided" ><b>OPEN (Guided Visit)</td>
                            <td class="guided" ><b>OPEN (Guided Visit)</td>
                            <td class="guided" ><b>OPEN (Guided Visit)</td>
                            <td class="guided" ><b>OPEN (Guided Visit)</td>
                            <td colspan="2" class= "open"><b>OPEN</b></td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Thursday</b>
                        </td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td colspan="2" class= "open"><b>OPEN</b></td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Friday</b>
                        </td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td colspan="2" class= "closed"><b>CLOSED</b></td>
                    </tr>
                    <tr>
                        <td  >
                            <b>Saturday</b>
                        </td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td class="guided" ><b>OPEN (Guided Visit)</td>
                        <td colspan="2" class= "open"><b>OPEN</b></td>
                    </tr>
                    <tr>
                      <td  >
                          <b>Sunday</b>
                      </td>
                      <td class="guided" ><b>OPEN (Guided Visit)</td>
                      <td class="guided" ><b>OPEN (Guided Visit)</td>
                      <td class="guided" ><b>OPEN (Guided Visit)</td>
                      <td class="guided" ><b>OPEN (Guided Visit)</td>
                      <td colspan="2" class= "open"><b>OPEN</b></td>
                  </tr>
                </table> 
            </article>
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
              <footer id="footer"> CNM &copy Copyright 2022 - All rights reserved</footer>
    </body>
</html>