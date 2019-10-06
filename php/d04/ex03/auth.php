<?php
function auth($login, $passwd)
{
	$f = unserialize(file_get_contents("../private/passwd"));
	if ($f) {
		foreach ($f as $s => $t) {
			if ($t['login'] === $login && $t['passwd'] === hash('whirlpool', $passwd))
			{
				return TRUE;
			}
		}
	}
	return FALSE;
}
?>
