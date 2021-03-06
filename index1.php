<?php 

//PDOでデータベース接続
try {
	$pdo = new PDO("mysql:host=localhost;dbname=gs_db;charset=utf8","root"); 
}catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage());
}

// 実行したいSQL文（最新順番3つ取得）
$sql = "SELECT * FROM gs_table ORDER BY time DESC LIMIT 10";

//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$flag = $stmt->execute();

if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>映画の記録</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<!--header-->
<div class="header">
	<h1 class="site-title">映画日記</h1>
</div>
	
<!--作品-->
<div class="section section__work" id="work">	
	<div class="wrapper">
		<?php
		while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>	
		<ul class="movie-list">
			<li class="movie-item">
			<p class="movietitle"><a href="<?php echo $result["url"];?>" target="blank"><?php echo $result["title"];?></a></p>
			<p>見た日：<?php echo $result["day"];?></p>
			<p>主演：<?php echo $result["starring"];?></p>
			<p>監督：<?php echo $result["director"];?></p>
			<p>感想：<?php echo $result["impression"];?></p>
			<p>記録日時：<?php echo $result["time"];?></p>

			 </li> 
		<?php } ?>
		</ul>

<!--// 作品-->

</body>
</html>

<?php 
}
?>