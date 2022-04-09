<?php
    $servername = "localhost";
    $firstName = $_POST['firstName'];
    $familyName = $_POST['familyName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['textarea'];
    $con = mysqli_connect($servername, "root", "root");
    if (!$con) { die('Could not connect: ' . mysqli_error($con)); }

    mysqli_select_db($con,"mydb");
    $sql2= "INSERT INTO contact (firstName, familyName, email, contactSubject, contactMessage) VALUES ('$firstName', '$familyName', '$email', '$subject', '$message')";
    if (!mysqli_query($con,$sql2)) { die('Error: ' . mysqli_error($con)); }
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Contact Us </title>
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
    <article class="content"> <h1 class="reservationAccepted"> Your contact form has been sent! </h1>
      <img src="logos/logo.svg" alt="CNM logo" class="bigLogo"> 
    </article>
    <footer id="footer" class="bookFooter"> CNM &copy; Copyright 2022 - All rights reserved</footer>
  </body>
</html>