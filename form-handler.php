/*to recieve enquiry when it is filled*/
<?php
$name=$_POST['name'];
$visitor=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@bngluniversity.com';/*all details which is sent from website*/
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User Message:$Message.\n";

$to='emailid';
$headers="From: $email_from \r\n";
$headers.="Reply-To:$visitor_email \r\n;
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");


?>