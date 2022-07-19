<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  $receiver = "shivamrvgupta@gmail.com";
  $subject = "From: $name <$email>";
  $body = "Name: $name\n Email: $email\n Message: $message";
  $sender = "From: $email";

  echo "Your Message has been sent."

  echo $name;
?>