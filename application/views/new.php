<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="container">
		<form action="/Products/create" method="post">
			<input type="hidden" name="hide">
			<label>Name:
				<input type="text" name="name">
			</label>
			<label>Description:
				<input type="text" name="description">
			</label>
			<label>Price:
				<input type="text" name="price">
			</label>
			<button name="create">Create</button>
		</form>
		<a href="\">Go back</a>
	</div>


</body>
</html>