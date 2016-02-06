<?php
$myemail = 'EMAIL@EMAIL.COM';
if(empty($_POST['a_line'])  ||
empty($_POST['b_line']) ||
empty($_POST['c_line']) ||
empty($_POST['d_line']) ||
empty($_POST['e_line']) ||
empty($_POST['f_line']) ||
empty($_POST['g_line']))
{
$errors .= "\n Error: all fields are required";
}
$a_line = $_POST['a_line'];
$b_line = $_POST['b_line'];
$c_line = $_POST['c_line'];
$d_line = $_POST['d_line'];
$e_line = $_POST['e_line'];
$f_line = $_POST['f_line'];
$g_line = $_POST['g_line'];
if( empty($errors))
{
$to = $myemail;
$email_subject = "SUBJECT: $a_line";
$email_body = "Hello".
"\n 1: $a_line \n 2: $b_line\n 3:$c_line\n 4:$d_line\n 5:$e_line\n 6:$f_line\n 7:$g_line";

$headers = "From: $myemail\n";
$headers .= "Reply-To: $b_line";
mail($to,$email_subject,$email_body,$headers);
$server = "localhost";
$dbuser = "databaseNAME";
$dbpass = "databasePASSWORD";
$dbname = "databaseNAME";
mysql_connect($server, $dbuser, $dbpass);
mysql_select_db($dbname);
$result = mysql_query("INSERT INTO `sendera_report` VALUES('$a_line','$b_line','$c_line','$d_line','$e_line','$f_line','$g_line')");
header('Location: complete.html');
}
?>
sender
<?php
echo nl2br($errors);
?>
