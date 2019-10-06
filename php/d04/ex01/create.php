<?php
	if (!empty($_POST['login']) && !empty($_POST['passwd']) && $_POST['submit'] == "OK")
	{
		if(file_exists("../private/passwd"))
		{
			$f = unserialize(file_get_contents("../private/passwd"));
			foreach($f as $str)
			{
				if ($str['login'] === $_POST['login'])
				{
					echo "ERROR\n";
					return ;
				}
			}
		}
		if (!file_exists('../private'))
			mkdir("../private", 0777);
		if (!file_exists('../private/passwd'))
			file_put_contents("../private/passwd", '');
		$all['login'] = $_POST['login'];
		$all['passwd'] = hash('whirlpool', $_POST['passwd']);
		$f[] = $all;
		file_put_contents("../private/passwd",serialize($f));
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
		return ;
	}
?>
