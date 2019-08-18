<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'kazashim@cynojine.com';
$fromsubject = 'cynojine.com';
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
	$to = $youremail; 
	$mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.php'>Home Page</a>"; 
								mail($to, $subject, $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>"; 
}
?> 