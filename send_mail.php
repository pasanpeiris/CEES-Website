<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$email=$_POST['email'];
$to = "pasan1486381@gmail.com";
$subject = "Requesting Information";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
    echo("
    Message successfully sent!
 ");
} else {
 echo("
    Message delivery failed...
 ");
}

?>