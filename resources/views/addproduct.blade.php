<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstarp css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 mb-2>Add Product Form</h1>
		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{Session::get('msg')}}
		</div>
		@endif
		<form method="post" enctype="multipart/form-data" action="{{route('storeproduct')}}">
			@csrf
			<div class="col-md-6">
				<label for="productname">Product Name</label>
				<input type="text" class="form-control" name="pname" placeholder="enter product name" id="inputproductname">	
			</div>
			<div class="col-md-6">
				<label for="price">Product Price</label>
				<input type="number" class="form-control" name="price" 	>	
			</div>
			<div class="col-md-6">
				<label for="quantity">Product Quantity</label>
				<input type="number" name="quantity" class="form-control">
				
			</div>
			<div class="col-md-6">
				<label for="description">Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>
			<div class="col-md-6">
				<label for="image">Product image</label>
				<input type="file" name="image" class="form-control">
			</div> <br>
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Add Product</button>
			</div>
		</form>
	</div>

</body>
</html>