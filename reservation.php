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
            { die('Error: ' . mysqli_error($con)); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET firstslot=firstslot-$numbers where dates='$dates'";
        echo "<h1> Your reservation has been accepted</h1>";
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else{
        echo "<h1> Your reservation can not be accepted: NO AVAILABLE SEATS</h1>";
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
            { die('Error: ' . mysqli_error($con)); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET secondslot=secondslot-$numbers where dates='$dates'";
        echo "<h1> Your reservation has been accepted</h1>";
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo "<h1> Your reservation can not be accepted: NO AVAILABLE SEATS</h1>";
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
            { die('Error: ' . mysqli_error($con)); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET thirdslot=thirdslot-$numbers where dates='$dates'";
        echo "<h1> Your reservation has been accepted</h1>";
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo "<h1> Your reservation can not be accepted: NO AVAILABLE SEATS</h1>";
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
            { die('Error: ' . mysqli_error($con)); }
        mysqli_close($con);
        mysqli_select_db($con2,"mydb");
        $sql="UPDATE availabilityNumbers SET fourthslot=fourthslot-$numbers where dates='$dates'";
        echo "<h1> Your reservation has been accepted</h1>";
        if (!mysqli_query($con2,$sql))
          { die('Error: ' . mysqli_error($con2)); }
        mysqli_close($con2);
      } else {
        echo "<h1> Your reservation can not be accepted: NO AVAILABLE SEATS</h1>";
      }
    }
?>