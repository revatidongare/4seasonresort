<?php

if(isset($_POST['contact'])){
    // include 'config.php';

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $cnumber = $_POST['cnumber'];
    $guest = $_POST['guest'];
    $datepicker = $_POST['datepicker'];
      $slot = $_POST['slot'];

// email code
  $to = $name;
  $subject = "Hi " . $name. " " . ", 4 Seasons Resorts Mulshi....!";
  $body = '
Dear ' . $name . ',
  Thank you for Booking .
  Your Table is book Sucessfully!
  Kind Regards,
4 Seasons Resorts Mulshi.
  ';
  $headers = 'From: 4seasonsresortsmulshi@gmail.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:btable.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $name);
  }

  // email end

  //self mail
$to_email1 = '4seasonsresortsmulshi@gmail.com';
  $subject1 = ' 4 Seasons Resort Mulshi  ';
  $message1 = 'Customer Name: '.$name." " .$lname.
  "\n".
  "\n" . 'Contact Number: '.$cnumber.
  "\n".
  "\n" . 'Number Of Guest: '.$guest.
  "\n".
   "\n" . 'Booking Date: '.$datepicker.
  "\n".
  "\n".'Time Slot: '.$slot.
  "\n".
  //'Message: '.$message.
  "\n".
  $headers1 = 'From: '.$name;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:btable.php?q=101");
    }

//Contact Number



?>
