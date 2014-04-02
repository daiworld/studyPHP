<?php
session_start();

$message = null;
if(isset($_SESSION['message'])){
	$message = $_SESSION['message'];	//出力メッセージの取得
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<form action="primes.php" method="post">
	<input type="text" name="number">
	<input type="submit" value="送信">
</form>

<?=$message?>

</body>
</html>