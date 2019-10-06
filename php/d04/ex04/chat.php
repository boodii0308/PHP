<?php
	session_start();
	if ($_SESSION["loggued_on_user"] == "")
		echo "ERROaaaR\n";
	else {
		if (!file_exists('../private/chat'))
			file_put_contents('../private/chat', '');
		if (file_exists('../private/chat')) {
		$chat = unserialize(file_get_contents('../private/chat'));
		foreach ($chat as $str) {
			echo "[". date('H:i', $str['time']) . "] <b>" . $str['login'] . "</b>: " . $str['msg'] . "<br />";
			}
		}
	}

?>
