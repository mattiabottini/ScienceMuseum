<?php
    $servername = "localhost";
    $firstName = $_POST['firstName'];
    $familyName = $_POST['familyName'];
    $email = $_POST['email'];
    $numbers = intval($_POST['number']);
    $dates = $_POST['date'];
    $timeslot = $_POST['timeslot'];
    echo "<link rel='stylesheet' type='text/css' href='./book.css' />";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    $htmlAccepted='<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
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
        <a href="./book.php">Book a visit</a>
      </div>
    </div>
    <a href="./contact.html">Contact</a>
  </div>
  <article id="content"> <h1 class="reservationAccepted"> Your reservation has been accepted!</h1> 
  <img src="./logo.svg" alt="logo" style="margin-top: 50px; width:20vw; height:20vw;"> 
  </article>
  <footer id="footer" style="margin-top: 50%; margin-bottom: 0px;"> Mattia Bottini &copy Copyright 2022 - All rights reserved</footer>';

$htmlNotAccepted='<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
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
    <a href="./book.php">Book a visit</a>
  </div>
</div>
<a href="./contact.html">Contact</a>
</div>
<article id="content"> <h1 class="reservationRefused"> Your reservation can not be accepted: <br>NO AVAILABLE SEATS</h1> 
  <img src="./logo.svg" alt="logo" style="margin-top: 50px; width:20vw; height:20vw;"> 
</article>
<footer id="footer" style="margin-top: 50%; margin-bottom: 0px;"> Mattia Bottini &copy Copyright 2022 - All rights reserved</footer>';

$emailAlreadyUsed='<header id="header"><br> <img class = "headerImage" src="./logo.svg" alt="logo"><a class="header" href="./index.php">National Museum of Colorado</a></header>
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
    <a href="./book.php">Book a visit</a>
  </div>
</div>
<a href="./contact.html">Contact</a>
</div>
<article id="content"> <h1 class="reservationRefused"> Your reservation can not be accepted: <br>EMAIL USED IN ANOTHER RESERVATION!</h1> 
  <img src="./logo.svg" alt="logo" style="margin-top: 50px; width:20vw; height:20vw;"> 
</article>
<footer id="footer" style="margin-top: 50%; margin-bottom: 0px;"> Mattia Bottini &copy Copyright 2022 - All rights reserved</footer>';


    // Create connection
    $con = mysqli_connect($servername, "root", "root");
    $con1 = mysqli_connect($servername, "root", "root");
    $con2 = mysqli_connect($servername, "root", "root");

    // Check connection
    if (!$con) { die('Could not connect: ' . mysqli_error($con)); }

  
    if($timeslot=='firstslot'){
      mysqli_select_db($con1,"mydb");
      $query= "SELECT firstslot from availabilityNumbers where dates='$dates'";
      $result = $con1->query($query);
      $row = $result->fetch_assoc();
      if (!mysqli_query($con1,$query)){ die('Error: ' . mysqli_error($con1)); }
      mysqli_close($con1);
      if($numbers<=intval($row["firstslot"])){
        mysqli_select_db($con,"mydb");
        $sql2= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql2))
            { die($emailAlreadyUsed); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET firstslot=firstslot-$numbers where dates='$dates'";
        echo $htmlAccepted;
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else{
        echo $htmlNotAccepted;
      }
    }

    elseif($timeslot=='secondslot'){
      mysqli_select_db($con1,"mydb");
      $query= "SELECT secondslot from availabilityNumbers where dates='$dates'";
      $result = $con1->query($query);
      $row = $result->fetch_assoc();
      if (!mysqli_query($con1,$query)){ die('Error: ' . mysqli_error($con1)); }
      mysqli_close($con1);
      if($numbers<=intval($row["secondslot"])){
        mysqli_select_db($con,"mydb");
        $sql2= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql2))
            { die($emailAlreadyUsed); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET secondslot=secondslot-$numbers where dates='$dates'";
        echo $htmlAccepted;
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo $htmlNotAccepted;
      }
    }

    elseif($timeslot=='thirdslot'){
      mysqli_select_db($con1,"mydb");
      $query= "SELECT thirdslot from availabilityNumbers where dates='$dates'";
      $result = $con1->query($query);
      $row = $result->fetch_assoc();
      if (!mysqli_query($con1,$query)){ die('Error: ' . mysqli_error($con1)); }
      mysqli_close($con1);
      if($numbers<=intval($row["thirdslot"])){
        mysqli_select_db($con,"mydb");
        $sql2= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql2))
            { die($emailAlreadyUsed); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET thirdslot=thirdslot-$numbers where dates='$dates'";
        echo $htmlAccepted;
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo $htmlNotAccepted;
      }
    }

    elseif($timeslot=='fourthslot'){
      mysqli_select_db($con1,"mydb");
      $query= "SELECT fourthslot from availabilityNumbers where dates='$dates'";
      $result = $con1->query($query);
      $row = $result->fetch_assoc();
      if (!mysqli_query($con1,$query)){ die('Error: ' . mysqli_error($con1)); }
      mysqli_close($con1);
      if($numbers<=intval($row["fourthslot"])){
        mysqli_select_db($con,"mydb");
        $sql2= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
        if (!mysqli_query($con,$sql2))
            { die($emailAlreadyUsed); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET fourthslot=fourthslot-$numbers where dates='$dates'";
        echo $htmlAccepted;
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo $htmlNotAccepted;
      }
    }
?>