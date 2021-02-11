<?php

if(isset($_POST['contact'])){
    // include 'config.php';

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $cnumber = $_POST['cnumber'];
    $guest = $_POST['guest'];
     $table = $_POST['table'];
    $datepicker = $_POST['datepicker'];
      $slot = $_POST['slot'];

      // $s = $_POST['subject'];
    // $chekin = $_POST['from_date'];
    // $checkout = $_POST['to_date'];
    // $room_type = $_POST['room_type'];
    // $guest = $_POST['guest_num'];    
    //$message = $_POST['message'];
      
    // $query="INSERT INTO `manage_contacts`(`name`,`email`,`phone`,`subject`,`message`,`from_date`,`to_date`,`room_type`,`guest_num`) VALUES ('$name','$email','$phone','$subject','$message','$chekin','$checkout','$room_type','$guest')";
        // $stmt=$conn->prepare($query);
         // $res=$stmt->execute();

   // $result = mysqli_query($con, $query);
    // if($res){

 // sms start
        // $username = "niranjanmwaghmare@gmail.com";
        // $hash = "a46ccbecafa6557b1c704800e4bb63385199098b6a7019aaeb5472a340382554";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
        // $test = "0";

  // Data for text message. This is the text message data.
        // $sender = "TXTLCL"; // This is who the message appears to be from.
        // $numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
        // $message = "Welcome to Lonavla Weekend family.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
        // $message = urlencode($message);
        // $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
        // $ch = curl_init('http://api.textlocal.in/send/?');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch); 
        // curl_close($ch);
// sms end

// sms start
        // $username1 = "info@bhumiputraservices.com";
        // $hash1 = "a46ccbecafa6557b1c704800e4bb63385199098b6a7019aaeb5472a340382554";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
        // $test1 = "0";

  // Data for text message. This is the text message data.
        // $sender1 = "TXTLCL";   //This is who the message appears to be from.
        // $number1 = "9762241142"; // A single number or a comma-seperated list of numbers
        // $message1 = "You have got enquiry from website.". 
        // 'User_name: '.$name.
        // 'email: '.$email.
        // 'ph.no: '.$phone.
        // 'check-in-date: '.$chekin.
        // 'checkout-date: '.$checkout.
        // 'room_type: '.$room_type.
        // 'no.of guest: '.$guest;
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
        // $message1 = urlencode($message1);
        // $data1 = "username=".$username1."&hash=".$hash1."&message=".$message1."&sender=".$sender1."&numbers=".$numbers1."&test=".$test1;
        // $ch = curl_init('http://api.textlocal.in/send/?');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch); // This is the result from the API
        // curl_close($ch);
// sms end



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
  $headers = 'From: pallavi@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:btable.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $name);
  }

  // email end

  //self mail
$to_email1 = 'pallavi@journeyworlddmc.com';
  $subject1 = ' 4 Seasons Resort Mulshi  ';
  $message1 = 'Customer Name: '.$name." " .$lname.
  "\n".
  "\n" . 'Contact Number: '.$cnumber.
  "\n".
  "\n" . 'Number Of Guest: '.$guest.
  "\n".
   "\n" . 'Table Number: '.$table.
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
if(isset($_POST['submit'])){
    // include 'config.php';

    $name = $_POST['name'];
    $lname = $_POST['lname'];
     $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $message = $_POST['message'];
     

      // $s = $_POST['subject'];
    // $chekin = $_POST['from_date'];
    // $checkout = $_POST['to_date'];
    // $room_type = $_POST['room_type'];
    // $guest = $_POST['guest_num'];    
    //$message = $_POST['message'];
      
    // $query="INSERT INTO `manage_contacts`(`name`,`email`,`phone`,`subject`,`message`,`from_date`,`to_date`,`room_type`,`guest_num`) VALUES ('$name','$email','$phone','$subject','$message','$chekin','$checkout','$room_type','$guest')";
        // $stmt=$conn->prepare($query);
         // $res=$stmt->execute();

   // $result = mysqli_query($con, $query);
    // if($res){

 // sms start
        // $username = "niranjanmwaghmare@gmail.com";
        // $hash = "a46ccbecafa6557b1c704800e4bb63385199098b6a7019aaeb5472a340382554";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
        // $test = "0";

  // Data for text message. This is the text message data.
        // $sender = "TXTLCL"; // This is who the message appears to be from.
        // $numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
        // $message = "Welcome to Lonavla Weekend family.";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
        // $message = urlencode($message);
        // $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
        // $ch = curl_init('http://api.textlocal.in/send/?');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch); 
        // curl_close($ch);
// sms end

// sms start
        // $username1 = "info@bhumiputraservices.com";
        // $hash1 = "a46ccbecafa6557b1c704800e4bb63385199098b6a7019aaeb5472a340382554";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
        // $test1 = "0";

  // Data for text message. This is the text message data.
        // $sender1 = "TXTLCL";   //This is who the message appears to be from.
        // $number1 = "9762241142"; // A single number or a comma-seperated list of numbers
        // $message1 = "You have got enquiry from website.". 
        // 'User_name: '.$name.
        // 'email: '.$email.
        // 'ph.no: '.$phone.
        // 'check-in-date: '.$chekin.
        // 'checkout-date: '.$checkout.
        // 'room_type: '.$room_type.
        // 'no.of guest: '.$guest;
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
        // $message1 = urlencode($message1);
        // $data1 = "username=".$username1."&hash=".$hash1."&message=".$message1."&sender=".$sender1."&numbers=".$numbers1."&test=".$test1;
        // $ch = curl_init('http://api.textlocal.in/send/?');
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch); // This is the result from the API
        // curl_close($ch);
// sms end



// email code
  $to = $name;
  $subject = "Hi " . $name. " " . ", 4 Seasons Resorts Mulshi....!";
  $body = '
Dear ' . $name . ',
  Thank you for Contacting .
  Kind Regards,
4 Seasons Resorts Mulshi.
  ';
  $headers = 'From: pallavi@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contact.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $name);
  }

  // email end

  //self mail
$to_email1 = 'pallavi@journeyworlddmc.com';
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
