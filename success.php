<?php 
  $to = 'ON_store_operations@gap.com' ;  // Replace email address with your own
  $subject = 'Old Navy Sign Up Form' ; 
  $name = $_POST['name'] ; 
  $email = $_POST['email'] ;
  $phone = $_POST['phone'] ;
  $store = $_POST['store'] ;
  $area = implode(' ', $_POST['area']);

  // The above are the variables that will hold data entered by the user


  $message = "From: $name \nEmail: $email \nPhone: $phone \nStore: $store \nArea: $area \n";

  // It collects the variables your declared at the top
  // A line break ( \n ) is placed between each section
  

  $sent = mail($to, $subject, $message) ; 

  // A new variable called $sent is created
  // This variable uses the mail() function to send the data.
  // The first option is the email address the message is sent to, as declared in the $to variable
  // The second is the subject, as declared with the $subject variable

  // If the message is sent successfully, a "success message" is echoed.
  // If not, an alternate message is echoed.
?>