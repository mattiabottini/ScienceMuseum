<?php
  echo "<link rel='stylesheet' type='text/css' href='./book.css' />";
  $servername = "localhost";
  $con = mysqli_connect($servername, "root", "root");
  if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
  mysqli_select_db($con,"mydb");
  $result = mysqli_query($con,"SELECT * FROM zoology");

  
  echo '<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <article id="contentCollection"> <h1> Zoology Section </h1>
            <h3>In our <i> Zoology section </i> you can find: </h3> <br>';
            echo "<table>";
            echo "<tr> <td>Name</td> <td>Scientific Name</td> <td>Family</td><td>Color</td><td>Habitat</td><td>Feeding</td><td>Conservation Status</td><td>Museum Section</td></tr>";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              echo "<tr><td>" . $row['name'] . "</td><td>" . $row['scientificName'] . "</td><td>" . $row['family'] . "</td><td>" . $row['animalColor'] . "</td><td>" . $row['habitat'] . "</td><td>" . $row['feeding'] ."</td><td>" . $row['conservationStatus'] . "</td><td>" . $row['museumSection'] . "</td></tr>";
            }
            echo "</table>";
            mysqli_close();
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