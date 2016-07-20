<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	

		table,tr,th, td{
			border:1px solid black;
		}

	

	</style>
</head>
<body>
	<div id="container">
		<h2>Products</h2>
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th id="test">Actions</th>
			</tr>
<?php
	foreach($products as $product){
?>	
	
			<tr>
				<td><?=$product['name']?></td>
				<td><?=$product['description']?></td>
				<td><?=$product['price']?></td>
				<td ><a href="/Products/show/<?=$product['id']?>">Show</a> | 
				<a href="/Products/edit/<?=$product['id']?>">Edit</a> | 

				<form action="/Products/destroy/<?=$product['id']?>" method="post">
					<input type="hidden" name="hide">
					<button name="remove_button">Remove</button>
				</form>
				</td>
			</tr>
<?php
	}
?>
		</table>
		<h4><a href ="/Products/new">Add a new product</a></h4>
	</div>
</body>
</html>