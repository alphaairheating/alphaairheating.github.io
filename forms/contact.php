<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'jessicaelkins@bellsouth.net';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message'];

  $email_from = 'Alpha Air Website';
  $email_subject = 'New Message from Alpha Air Customer';
  $email_body = "Name: from_name.\n".
                "Email: $from_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $from_email \r\n";

  //mail($to,$email_subject,$email_body,$headers)


  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//  $contact->add_message( $_POST['name'], 'From');
//  $contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);

  //echo $contact->send();
?>
