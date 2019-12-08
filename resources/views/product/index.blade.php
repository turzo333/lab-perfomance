<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="/uikit/js/uikit.min.js"></script>
        <script src="/uikit/js/uikit-icons.min.js"></script></head>
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
    <div class="uk-margin">    <a href="{{route('logout.index')}}" class="uk-button uk-button-primary">logout</a>
</div>
<div class="uk-margin">    <a href="{{route('product.add')}}" class="uk-button uk-button-primary">Add Product</a>
</div>


<input type="text" id="search" name="search" onchange="myFunction()">

<div id="table">
<table class="uk-table uk-table-striped">


    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
             <th>Price</th>
            
               <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
                  @foreach($cates as $cate)

        <tr >
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->quantity }}</td>
            <td>{{ $cate->price }}</td>
           
             <td><a href="product/edit/{{ $cate->id }}" class="uk-button uk-button-primary">Edit</a></td>
             <td><a href="product/delete/{{ $cate->id }}" class="uk-button uk-button-primary">Delete</a></td>
        </tr>

          @endforeach
        
    </tbody>
</table>
</div>

</div></div>

<script>
    function myFunction(){

(function() {



    var x = document.getElementById("search").value;

    
  var imageApi = "http://localhost:8000/product/load/"+x;


  $('#table').load(imageApi);

})();
    }
</script>
</body>
</html>