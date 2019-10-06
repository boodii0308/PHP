<?php
	if (!empty($_POST['login']) && !empty($_POST['oldpw']) && !empty($_POST['newpw']) && $_POST['submit'] == "OK")
	{
		if (!file_exists('../private/passwd'))
		{
			echo "ERROR\n";
			return ;
		}
		if ($_POST['oldpw'] == $_POST['newpw'])
		{
			echo "ERROR\n";
			return ;
		}
		$f = unserialize(file_get_contents("../private/passwd"));
		foreach($f as $s => $str)
		{
			if ($str['login'] === $_POST['login'])
			{
				if ($str['passwd'] !== hash ('whirlpool',$_POST['oldpw']))
				{
					echo "ERROR\n";
					return ;
				}
				$f[$s]['passwd'] = hash('whirlpool', $_POST['newpw']);
				file_put_contents("../private/passwd",serialize($f));
				echo "OK\n";
				return ;
			}
		}
		echo "ERROR\n";
		return ;
	}
	else
	{
		echo "ERROR\n";
		return ;
	}
?>
