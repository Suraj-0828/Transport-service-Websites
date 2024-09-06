<?php 


$ToEmail = 'info@audyogikparivahanindia.com';

$EmailSubject = 'CONTACT US'; 
$mailheader = "From: ".'info@audyogikparivahanindia.com'."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY = '<html><body>';
$MESSAGE_BODY .='<style>table, th, td {  border: 1px solid black;}</style>';
$MESSAGE_BODY .= '<h1 style="color:#f40;">Customer Contact Details</h1>';
$MESSAGE_BODY .= '<table style="background-color:#a6a6a6">';

$MESSAGE_BODY .= '<tr>';
$MESSAGE_BODY .= '<th>';
$MESSAGE_BODY .= 'Name';
$MESSAGE_BODY .= '</th>';

$MESSAGE_BODY .= '<td>';
$MESSAGE_BODY .= $_POST["name"];
$MESSAGE_BODY .= '</td>';
$MESSAGE_BODY .= '</tr>';


$MESSAGE_BODY .= '<tr>';
$MESSAGE_BODY .= '<th>';
$MESSAGE_BODY .= 'Email';
$MESSAGE_BODY .= '</th>';

$MESSAGE_BODY .= '<td>';
$MESSAGE_BODY .= $_POST["email"];
$MESSAGE_BODY .= '</td>';
$MESSAGE_BODY .= '</tr>';


$MESSAGE_BODY .= '<tr>';
$MESSAGE_BODY .= '<th>';
$MESSAGE_BODY .= 'Message Subject';
$MESSAGE_BODY .= '</th>';

$MESSAGE_BODY .= '<td>';
$MESSAGE_BODY .= $_POST["msg_subject"];
$MESSAGE_BODY .= '</td>';
$MESSAGE_BODY .= '</tr>';


$MESSAGE_BODY .= '<tr>';
$MESSAGE_BODY .= '<th>';
$MESSAGE_BODY .= 'Phone Number';
$MESSAGE_BODY .= '</th>';

$MESSAGE_BODY .= '<td>';
$MESSAGE_BODY .= $_POST["phone_number"];
$MESSAGE_BODY .= '</td>';
$MESSAGE_BODY .= '</tr>';


$MESSAGE_BODY .= '<tr>';
$MESSAGE_BODY .= '<th>';
$MESSAGE_BODY .= 'Message';
$MESSAGE_BODY .= '</th>';

$MESSAGE_BODY .= '<td>';
$MESSAGE_BODY .= $_POST["message"];
$MESSAGE_BODY .= '</td>';
$MESSAGE_BODY .= '</tr>';


$MESSAGE_BODY .= '</table>';
$MESSAGE_BODY .= '</body>
</html>';



mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo "success";
  
// The below code does not get executed 
// while redirecting
exit;
?>

