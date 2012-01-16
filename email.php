<?php 
// we include the config-file
include_once('sm-config');

// we start a session to hold some variables for later use
session_start();

// set a session variable to check against for statistics
$_SESSION['url'] = 1;

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
//	so that you go back to the page you were at
	echo '<script type="text/javascript">history.back()</script>';

//	Explanation page for Readers without Javascript
$explanation = file_get_contents("spamexplain-eng.html");
echo '<noscript>';
echo $explanation;
echo '</noscript>';
?>
