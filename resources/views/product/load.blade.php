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

        <tr id="table">
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
