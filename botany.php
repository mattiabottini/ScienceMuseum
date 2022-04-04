<?php
  echo "<title> Botany Section </title>";
  echo "<link rel='stylesheet' type='text/css' href='./book.css' />";
  echo '<link rel="icon" type="image/x-icon" href="./logo.svg">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  $servername = "localhost";
  $con = mysqli_connect($servername, "root", "root");
  if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
  mysqli_select_db($con,"mydb");
  $result = mysqli_query($con,"SELECT * FROM botany");

  
  echo '<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <article id="content"> <h1> Botany Section </h1>
            <h3>In our <i> Botany Section </i> you can find: </h3> <br>';
            echo "<table>";
            echo "<tr> <td>Name</td> <td>Scientific Name</td> <td>Family</td><td>Color</td><td>Origin</td><td>Conservation Status</td><td>Museum Section</td><td class='lastRow'>Image</td></tr>";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              echo "<tr><td>" . $row['name'] . "</td><td>" . $row['scientificName'] . "</td><td>" . $row['family'] . "</td><td>" . $row['flowerColor'] . "</td><td>" . $row['origin'] . "</td><td>" . $row['conservationStatus'] . "</td><td>" . $row['museumSection'] . "</td><td class='lastRow'>" . '<img class="tableImage" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="plant image"/>' . "</td></tr>";
            }
            echo "</table>";
            mysqli_close($con);
    echo  '</article>
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
            </div>';


echo '<footer id="footer"> &copy Copyright 2022 - Mattia Bottini </footer>';


?>