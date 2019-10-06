<?php

	if ($_GET['action'] == "set")
	{
		if ($_GET['name'] && $_GET['value'])
			setcookie($_GET['name'], $_GET['value']);
	}
	if ($_GET['action'] == "del")
	{
		if ($_GET['name'] && !$_GET['value'])
			setcookie($_GET['name'], '', 1);
	}
	if ($_GET['action'] == "get")
	{
		if (isset($_COOKIE[$_GET['name']]) && $_GET['name'] && !$_GET['value'])
			echo $_COOKIE[$_GET['name']]."\n";
	}
?>
