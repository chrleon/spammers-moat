<?php 
// we start a session to hold some variables for later use
session_start();

// set a session variable to check against for statistics
$_SESSION['url'] = 1;

//	the $domain variable is used for email-addresses on THIS domain
//	if no domain is entered in the link like contact/abc123
//	then the email will be sent to 'abc123@3djegrad.net'
$domain = "3djegrad.net";


//	The email-address is gathered from the GET-request
//	This GET-request is from the link you clicked
//	An if-statement checks to see that the email is set
if ($_GET['email']) {
$recipient = $_GET['email'];
}

//	The domain is gathered from the GET-request.
//	if it is set, we replace the $domain variable with the correct domain
if($_GET['domain']) {
$domain = $_GET['domain'];
	}

//	Opens the email-application with the address filled in
header("Location: mailto:$recipient@$domain");

//	Tells the browser to go back one page in history
echo '<script type="text/javascript">history.back()</script>';

//	Explanation page for Readers without Javascript
$explanation = file_get_contents("spamexplain-eng.html");
echo '<noscript>';
echo $explanation;
echo '</noscript>';
?>