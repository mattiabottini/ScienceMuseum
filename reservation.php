<?php
    /* Data Variables */
    $servername = "localhost";
    $firstName = $_POST['firstName'];
    $familyName = $_POST['familyName'];
    $email = $_POST['email'];
    $numbers = intval($_POST['number']);
    $dates = $_POST['date'];
    $timeslot = $_POST['timeslot'];

    // Create connection
    $con = mysqli_connect($servername, "root", "root");
    $con2 = mysqli_connect($servername, "root", "root");
    // Check connection
    if (!$con) { die('Could not connect: ' . mysqli_error($con)); }

    mysqli_select_db($con,"mydb");
    $sql= "INSERT INTO reservation (firstName, familyName, email, numbers, dates, timeslot) VALUES ('$firstName', '$familyName', '$email', '$numbers', '$dates', '$timeslot')";
    if (!mysqli_query($con,$sql))
        { die('Error: ' . mysqli_error($con)); }
    mysqli_close($con);

    mysqli_select_db($con2,"mydb");
    $sql="UPDATE availabilityNumbers SET firstslot=firstslot-$numbers where dates='$dates'";
    if (!mysqli_query($con2,$sql))
        { die('Error: ' . mysqli_error($con2)); }
    mysqli_close($con2);
    echo "<header id='header'> <br><a class='header' href='./index.php'>National Museum of Colorado</a></header>
            <article id='content'> <h1>Book a Guided Visit</h1> <br>
            </article>
            <div class='navbar'>
                <a href='./HomePage.html'>Home</a>
                <div class='subnav'>
                  <button class='subnavbtn'>Collections <i class='fa fa-caret-down'></i></button>
                  <div class='subnav-content'>
                    <a href='./botany.html'>Botany</a>
                    <a href='./zoology.html'>Zoology</a>
                    <a href='./mineralogy.html'>Mineralogy</a>
                    <a href='./archeology.html'>Archeology</a>
                  </div>
                </div>
                <div class='subnav'>
                  <button class='subnavbtn'>Visit <i class='fa fa-caret-down'></i></button>
                  <div class='subnav-content'>
                    <a href='./info.html'>Info</a>
                    <a href='./book.html'>Book a visit</a>
                  </div>
                </div>
                <a href='openingtimes.html'>Opening Times</a>
                <a href='contact.html'>Contact</a>
              </div>
            <footer id='footer'> &copy Copyright 2022 - Mattia Bottini </footer>";
?>