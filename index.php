<!DOCTYPE HTML>
<?php

	require_once "post.php";
	$post = new Post($_GET["p"] or "home");
?>

<html>
	<head>
		<title>Lee Avital</title>
	</head>
	<body>
		<h1>
		<?php 
			if($post->exists()){
				echo "Exists";
			}else{
				echo "The post could not be found";
			}
			
		?>
		</h1>
	</body>
</html>
