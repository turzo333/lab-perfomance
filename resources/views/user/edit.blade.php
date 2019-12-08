<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="/uikit/js/uikit.min.js"></script>
        <script src="/uikit/js/uikit-icons.min.js"></script>

		<style>
        .uk-container>:last-child {
    /* margin-bottom: 0; */
    margin: auto;
    display: table;
    box-shadow: 0 0 14px #e1e1e1;
    padding: 6%;
    margin-top: 50px;
    margin-bottom: 50px;
}
        </style>
</head>
<body>
<div class="uk-container">

	<div class="uk-card uk-card-body">
	<h1>Edit Product</h1>

	<a href="{{route('logout.index')}}" class="uk-button uk-button-primary">logout</a>

<br><br>
{{session('msg')}}

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
		  @foreach($products as $product)
		<tr>
			<td>Title</td>
			<td><input type="text" name="name" value="{{ $product->name }}" class="uk-input uk-form-width-medium"></td>
		</tr>
		
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity" value="{{ $product->quantity }}" class="uk-input uk-form-width-medium"></td>
		</tr>
		<tr>
			<td>des</td>
			<td><input type="text" name="price" value="{{ $product->price }}" class="uk-input uk-form-width-medium"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save" class="uk-button uk-button-primary"></td>
		</tr>

		@endforeach
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach

</div></div>
</body>
</html>