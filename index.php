<?php
session_start(); 
?>


<?php

//	Checks to see if url-variable in the session is set. 
//	If this variable is set, the email.php has run and returns the user back to
//	the originpage. That way the statistics won't be counted twice.	

//	------------------------------------------------------------------


if (!isset($_SESSION['url'])) { 
/*
//	Hent inn teller fil
*/
$filnavn = fopen("teller.txt", a);

//	skriv dato og klokkeslett til filen, etterfulgt av linjeskift 
$dato = date("d-m-Y - H:i:s",time());
fwrite($filnavn, $dato . "\n");
fclose($filnavn); // lukker filen
unset($_SESSION['earl']);
	
	} else {
	//do nothing
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">
<head>
<title>A spamfree world</title>



<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<script type="text/javascript" language="Javascript" src="/js/javascript.js"></script>

<style type="text/css" media="screen">
<!--
@import: url("/css/skjerm.css");
-->
</style>

<style type="text/css" media="print">
<!--
@import: url("/css/print.css");
-->
</style>

</head>

<body>
<p>
I would love to get spam!<br />
Please send to <a href="mailto:moat@3djegrad.net">moat</a><br />
This is an non-hidden email adress moat@3djegrad.net.
</p>
<p>
I loathe spam! <br />
I wouldn't like to receive <a href="contact/abc123">any</a>. <br />
The link is contact/abc123
</p>

<p>
Me neither, but I'm on <a href="contact/chrleon/gmail.com">another domain</a>. What about me? <br />
the link is contact/chrleon/gmail.com
</p>

<p><a href="http://3djegrad.net/blog/2009/05/a-moat-against-spammers/">back to the article - A moat against spammers</a></p>

</body>
</html>

<?php session_destroy(); ?>
