<?php
include("CAS.php");
phpCAS::client(CAS_VERSION_2_0,"login.iiit.ac.in",443,"/cas");
phpCAS::setNoCasServerValidation();
phpCAS::setExtraCurlOption(CURLOPT_SSLVERSION,1);
phpCAS::forceAuthentication();

$email = phpCAS::getUser();
if (empty($email)) {
	phpCAS::logout();
	die("Some blank login!?");
}
else
{
header("location:up.html");
  echo "Hello World!";
echo"<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
	<body>
		<br/><a href='logout.php'>Log Out</a>
	</body>
</html>";
}


?>

