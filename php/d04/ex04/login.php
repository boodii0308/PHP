<?php
	require_once('auth.php');
	session_start();
	if ($_SESSION["loggued_on_user"] = "")
		echo "ERROR\n";
	else
	{
        if (auth($_POST['login'], $_POST['passwd']) && $_POST['login'] && $_POST['passwd']) {
            $_SESSION["loggued_on_user"] = $_POST['login'];
            echo $_SESSION["loggued_on_user"]; ?>
	<html><body>
	<iframe name="chat" src="chat.php" width = "100%" height= "550px"></iframe>
	<hr>
	<iframe name="speak" src="speak.php" width = "100%" height= "50px"></iframe>
</body></html>
<?php
        }
    }
?>
