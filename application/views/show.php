<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="container">
		<h2>Product <?=$product['id']?></h2>
		<p>Name: <?=$product['name']?></p>
		<p>Description: <?=$product['description']?></p>
		<p>Price: $<?=$product['price']?></p>
		<a href="/Products/edit/<?=$product['id']?>">Edit</a> | <a href="\">Back</a>
	</div>


</body>
</html>