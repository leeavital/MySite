<!DOCTYPE HTML>
<?php

	require_once "post.php";
	$post = new Post($_GET["p"]);
?>

<html>
	<head>
		<title>Lee Avital</title>
	</head>
	<body>
		<h1><?php echo $post->title() 	  ?> </h1>
		<h2><?php echo $post->subtitle(); ?> </h2>
		<div class="body"><?php echo $post->body(); ?></div>
	</body>
</html>
