<?php
    $servername = "localhost";
    $firstName = $_POST['firstName'];
    $familyName = $_POST['familyName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['textarea'];
    echo "<link rel='stylesheet' type='text/css' href='./book.css'/>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    $contactAccepted='<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
    <div class="navbar">
    <a href="./index.php">Home</a>
    <div class="subnav">
      <button class="subnavbtn">Collections <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="./botany.html">Botany</a>
        <a href="./zoology.html">Zoology</a>
        <a href="./mineralogy.html">Mineralogy</a>
        <a href="./archeology.html">Archeology</a>
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
  <article id="content"> <h1> Your contact form has been sent! </h1> </article>
<footer id="footer"> &copy Copyright 2022 - Mattia Bottini </footer>';


    // Create connection
    $con = mysqli_connect($servername, "root", "root");

    // Check connection
    if (!$con) { die('Could not connect: ' . mysqli_error($con)); }

    mysqli_select_db($con,"mydb");
    $sql2= "INSERT INTO contact (firstName, familyName, email, contactSubject, contactMessage) VALUES ('$firstName', '$familyName', '$email', '$subject', '$message')";
    echo $contactAccepted;
    if (!mysqli_query($con,$sql2)) { die('Error: ' . mysqli_error($con)); }
    mysqli_close($con);


?>