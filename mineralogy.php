<?php
  $servername = "localhost";
  $con = mysqli_connect($servername, "root", "root");
  if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
  mysqli_select_db($con,"mydb");
  $result = mysqli_query($con,"SELECT * FROM mineralogy");
  ?>

  <!DOCTYPE html>
  <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title> Mineralogy Section </title>
        <link rel="stylesheet" type="text/css" href="css/mycss.css">
        <link rel="icon" type="image/x-icon" href="logos/logo.svg">
        <script src="javascript/myJS.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
      <body>
        <header id="header"><br> <img class = "headerImage" src="logos/logo.svg" alt="CNM logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
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
        <article class="content"> <h1> Mineralogy Section </h1>
          <h3>In our <em> Mineralogy Section </em> you can find: </h3> <br>
          <table>
            <tr class='tableDescription'> <td>Name</td> <td>Category</td><td>Color</td><td>Hardness <br> (Mohs Scale)</td><td>Museum Section</td><td class='lastRow'>Image</td></tr>
            <?php
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              echo "<tr><td>" . $row['name'] . "</td><td>" . $row['category'] . "</td><td>" . $row['color'] . "</td><td>" . $row['hardness'] . "</td><td>" . $row['museumSection'] . "</td><td class='lastRow'>" . '<img class="tableImage" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"alt="mineral image"/>' . "</td></tr>";
              }
              mysqli_close($con);
            ?>
          </table>
        </article>
        <footer id="footer"> CNM &copy; Copyright 2022 - All rights reserved</footer>
  </html>