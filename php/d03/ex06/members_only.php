<?php
	if ($_SERVER['PHP_AUTH_USER'] == 'zaz' &&
	$_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys'){
		header('Content-Type: image/png');
		$str = file_get_contents('../ex05/img/42.png');
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
		echo base64_encode($str);
		echo "'>\n</body></html>\n";
	} else {
		header('WWW-Authenticate: Basic realm=\'\'Member area\'');
		header('HTTP/1.0 401 Unauthorized');
		header('Content-Type: text/html');
		echo '<html><body>That area is accessible for members only</body></html>'."\n";
		exit;
	}
?>
