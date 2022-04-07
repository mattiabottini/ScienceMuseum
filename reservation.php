<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
        <title> Book a Visit </title>
        <link rel="stylesheet" type="text/css" href="./mycss.css">
        <link rel="icon" type="image/x-icon" href="logos/logo.svg">
        <script src="myJS.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <header id="header"><br> <img class = "headerImage" src="logos/logo.svg" alt="CNM logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
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
        <a href="./book.php">Book a visit</a>
      </div>
    </div>
    <a href="./contact.html">Contact</a>
    </div>
    </body>
  </html>


<?php
    $servername = "localhost";
    $firstName = $_POST['firstName'];
    $familyName = $_POST['familyName'];
    $email = $_POST['email'];
    $numbers = intval($_POST['number']);
    $dates = $_POST['date'];
    $timeslot = $_POST['timeslot'];
    $htmlAccepted='<article class="content"> <h1 class="reservationAccepted"> Your reservation has been accepted!</h1> 
    <img src="logos/logo.svg" alt="CNM logo" class="bigLogo"> 
    </article>
    <footer id="footer" class="bookFooter"> CNM &copy; Copyright 2022 - All rights reserved</footer>';

    $htmlNotAccepted='<article class="content"> <h1 class="reservationRefused"> Your reservation can not be accepted: <br>NO AVAILABLE SEATS</h1> 
      <img src="logos/logo.svg" alt="CNM logo" class="bigLogo"> 
    </article>
    <footer id="footer" class="bookFooter"> CNM &copy; Copyright 2022 - All rights reserved</footer>';

    $emailAlreadyUsed='<article class="content"> <h1 class="reservationRefused"> Your reservation can not be accepted: <br>EMAIL USED IN ANOTHER RESERVATION!</h1> 
      <img src="logos/logo.svg" alt="CNM logo" class="bigLogo">
    </article>
    <footer id="footer" class="bookFooter"> CNM &copy; Copyright 2022 - All rights reserved</footer>';

    $con = mysqli_connect($servername, "root", "root");
    $con2 = mysqli_connect($servername, "root", "root");
    if (!$con) { die('Could not connect: ' . mysqli_error($con)); }

  
    if($timeslot=='firstslot'){
      mysqli_select_db($con,"mydb");
      $query= "SELECT firstslot from availabilityNumbers where dates='$dates'";
      $result = $con->query($query);
      $row = $result->fetch_assoc();
      if($numbers<=intval($row["firstslot"])){
        $sql= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql)){ die($emailAlreadyUsed); }
        mysqli_select_db($con2,"mydb");
        $sql2="UPDATE availabilityNumbers SET firstslot=firstslot-$numbers where dates='$dates'";
        if (!mysqli_query($con2,$sql2)) { die('Error: ' . mysqli_error($con2)); }
        echo $htmlAccepted;
        mysqli_close($con2);
      } else{
        echo $htmlNotAccepted;
      }
      mysqli_close($con);
    }

    elseif($timeslot=='secondslot'){
      mysqli_select_db($con,"mydb");
      $query= "SELECT secondslot from availabilityNumbers where dates='$dates'";
      $result = $con->query($query);
      $row = $result->fetch_assoc();
      if($numbers<=intval($row["secondslot"])){
        $sql= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql)){ die($emailAlreadyUsed); }
        mysqli_select_db($con2,"mydb");
        $sql2="UPDATE availabilityNumbers SET secondslot=secondslot-$numbers where dates='$dates'";
        if (!mysqli_query($con2,$sql2)) { die('Error: ' . mysqli_error($con2)); }
        echo $htmlAccepted;
        mysqli_close($con2);
      } else{
        echo $htmlNotAccepted;
      }
      mysqli_close($con);
    }

    elseif($timeslot=='thirdslot'){
      mysqli_select_db($con,"mydb");
      $query= "SELECT thirdslot from availabilityNumbers where dates='$dates'";
      $result = $con->query($query);
      $row = $result->fetch_assoc();
      if($numbers<=intval($row["thirdslot"])){
        $sql= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql)){ die($emailAlreadyUsed); }
        mysqli_select_db($con2,"mydb");
        $sql2="UPDATE availabilityNumbers SET thirdslot=thirdslot-$numbers where dates='$dates'";
        if (!mysqli_query($con2,$sql2)) { die('Error: ' . mysqli_error($con2)); }
        echo $htmlAccepted;
        mysqli_close($con2);
      } else{
        echo $htmlNotAccepted;
      }
      mysqli_close($con);
    }

    elseif($timeslot=='fourthslot'){
      mysqli_select_db($con,"mydb");
      $query= "SELECT fourthslot from availabilityNumbers where dates='$dates'";
      $result = $con->query($query);
      $row = $result->fetch_assoc();
      if($numbers<=intval($row["fourthslot"])){
        $sql= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql)){ die($emailAlreadyUsed); }
        mysqli_select_db($con2,"mydb");
        $sql2="UPDATE availabilityNumbers SET fourthslot=fourthslot-$numbers where dates='$dates'";
        if (!mysqli_query($con2,$sql2)) { die('Error: ' . mysqli_error($con2)); }
        echo $htmlAccepted;
        mysqli_close($con2);
      } else{
        echo $htmlNotAccepted;
      }
      mysqli_close($con);
    }
?>