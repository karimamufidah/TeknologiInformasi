<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$to='karimamufidah@gmail.com';

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Jurnalweb.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: admin@yourdomain.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>