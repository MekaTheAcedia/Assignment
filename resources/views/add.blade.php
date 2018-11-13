<!DOCTYPE html>
<html>
	<head>
		<title>Add</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Input Products
				</div>
				<div class="panel-body">
					<form method="POST" action="{{ route('addProduct') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="price" class="form-control">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="number" name="image" class="form-control" placeholder="input 1-4">
						</div>
						<button class="btn btn-success" type="submit">Add Product</button>
						<button class="btn btn-warning" type="reset">Reset Field</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>