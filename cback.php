<?php

if(isset($_POST['submit'])){
    // include 'config.php';

    $name = $_POST['name'];
    $lname = $_POST['lname'];
     $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $message = $_POST['message'];
     
// email code
  $to = $name;
  $subject = "Hi " . $name. " " . ", 4 Seasons Resorts Mulshi....!";
  $body = '
Dear ' . $name . ',
  Thank you for Contacting .
  Kind Regards,
4 Seasons Resorts Mulshi.
  ';
  $headers = 'From: 4seasonsresortsmulshi@gmail.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contact.php?p=3');
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
  "\n" . 'Email: '.$email.
  "\n".
   "\n" . 'Message: '.$message.
  "\n".
  "\n".
  //'Message: '.$message.
 
  $headers1 = 'From: '.$name;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:contact.php?q=101");
    }
  ?>