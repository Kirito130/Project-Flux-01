<?php

   if(filter_has_var(INPUT_POST, 'submit')) {

      // Check Required Fields
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $mailTo = "services@fluxofficial.top";
      $headers = "From: ".$email;
      $txt = "You have recieved an e-mail from ".$name.".\n\n".$subject.".\n".$message; 

      mail($mailTo, $subject, $txt, $headers);

      header("Location: ../../services-inner.php");

      $msg1 = 'Registration Successful!';
      $msgClass1 = 'alert-success';
   }

?>