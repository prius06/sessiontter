 <?php 
//  これでsessionが使えるようになる
	session_start();
	// 入力がなければ、配列の初期化
	if (!isset($_SESSION['tweets'])){
		$_SESSION['tweets'] = [];
	}

	// $tweets = []; sessionの前に使ってみた
	if (isset($_POST['tweet']) && $_POST['tweet'] !==''){
		$_SESSION['tweets'][] = $_POST['tweet'];
		// $tweets[] = $_POST['tweet']; sessionの前に使ってみた
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>session_twitter</title>
</head>
<body>
	<h1>session_twitter</h1>
	<form action="sessiontter.php" method="POST">
		<textarea name="tweet" id="" cols="30" rows="2"></textarea>
		<button>send</button>
	</form>
	<?php 
		// sessionの配列を回す vbaとかｃ＃とは逆だね
		foreach ($_SESSION['tweets'] as $tweet){
	?>
	<p><?= $tweet ?></p>
	<?php 
		}
	?>
</body>
</html>