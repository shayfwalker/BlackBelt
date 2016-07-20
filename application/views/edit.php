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
		<h2>Edit Product ID: <?=$product['id']?> </h2>
		<form action="/Products/update/<?=$product['id']?>" method="post">
			<label>Name:
			<input type="text" name="name" value="<?=$product['name']?>">
			</label>
			<label>Description:
			<input type="text" name="description" value="<?=$product['description']?>">
			</label>
			<label>Price:
			<input type="text" name="price" value="<?=$product['price']?>">
			</label>
			<button>Update</button>
		</form>
		<p><a href="/Products/show/<?=$product['id']?>">Show</a> | 
				<a href="/">Back</a> </p>
	</div>
</body>
</html>