<?php
  echo "<link rel='stylesheet' type='text/css' href='./book.css' />";
  $servername = "localhost";
  $con = mysqli_connect($servername, "root", "root");
  if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
  mysqli_select_db($con,"mydb");
  $result = mysqli_query($con,"SELECT * FROM mineralogy");

  
  echo '<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
            <article id="content"> <h1> Mineralogy Section </h1>
            <h3>In our <i> Mineralogy Section </i> you can find: </h3> <br>';
            echo "<table>";
            echo "<tr class='tableDescription'> <td>Name</td> <td>Category</td><td>Color</td><td>Hardness <br> (Mohs Scale)</td><td>Museum Section</td><td class='lastRow'>Image</td></tr>";
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              echo "<tr><td>" . $row['name'] . "</td><td>" . $row['category'] . "</td><td>" . $row['color'] . "</td><td>" . $row['hardness'] . "</td><td>" . $row['museumSection'] . "</td><td class='lastRow'>" . '<img class="tableImage" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"alt="mineral image"/>' . "</td></tr>";
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