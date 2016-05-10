<?php
//message
$message = $_POST['name'];
//mail body - image position, background, font color, font size...
$body ='<html>
<head>
<style>
body
{
background: #fff;
font-family: sans-serif;
font-size:16px;
font-weight: normal;
color: #fff;
}
.message {
font-family: monospace;
color: #000;
}
h1 {
color:#fff;
}
.content{
overflow:hidden;
background-color: #336699;
margin: 10px;
padding:10px;
}
</style>
</head>
<body>
<div class="content">
<h1>My HTML Mail</h1>
<p id="absolute" class="message">'.$message.'<p><br />
<img src="http://baskunst.nl/demo/images/shirt.png" /><br />
</div>
</body>';
//to send HTML mail, the Content-type header must be set:
$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From: System Admin <noreply@example.com>' . "\r\n";
$to = $_POST['to'];
$subject = "My T-shirt design";
//mail function
$mail = mail($to, $subject, $body, $headers);
if(!$mail) {   
     echo "Error sending design";   
} else {
    echo "Your design was sent successfully.";
}
?>