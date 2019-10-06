<?php
	session_start();
	if ($_SESSION["loggued_on_user"] == "")
		echo "ERROaaaR\n";
	else if ($_POST['submit'] == "OK" && $_SESSION["loggued_on_user"] != "") {
		if (!file_exists('../private')) {
			return ;
		}
		if (!file_exists('../private/chat')) {
			file_put_contents('../private/chat', '');
		}
		if (file_exists('../private/chat')) {
			$tmp = fopen('../private/chat', "w");
			flock($tmp, LOCK_EX | LOCK_SH);
			$f = unserialize(file_get_contents('../private/chat'));
			$all['login'] = $_SESSION["loggued_on_user"];
			$all['time'] = time();
			$all['msg'] = $_POST['msg'];
			$f[] = $all;
			file_put_contents("../private/chat", serialize($f));
			flock($tmp, LOCK_UN);
			fclose($tmp);
		}
		else
		{
			$all['login'] = $_SESSION["loggued_on_user"];
			$all['time'] = time();
			$all['msg'] = $_POST['msg'];
			$f[] = $all;
			file_put_contents("../private/chat", serialize($f));
		}

?>
<html><body>
	<head>
	<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<form action="speak.php" method ="post">
		<input type="text" name ="msg" value = "">
		<input type="submit" name = "submit" value = "OK">
	</form>
</body></html>
<?php
	}
	?>
