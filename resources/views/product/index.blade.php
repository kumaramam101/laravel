<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>All Products</h4>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $pro )
                                <tr>
                                    <td>{{ $pro->id }}</td>
                                    <td>{{ $pro->name }}</td>
                                    <td>{{ $pro->description }}</td>
                                    <td>{{ $pro->price }}</td>
                                    <td><img src="{{ asset('uploads/product/'.$pro->image) }}" width="80px" alt=""></td>
                                    {{-- <td>{{ $pro->image }}</td> --}}
                                    <td>
                                        <a href="{{ url('edit-product/'.$pro->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ url('delete-product/'.$pro->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        {{-- @method('DELETE')
                                        <a href="{{ url('delete-product/'.$pro->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    </td>
                                </tr>
                                
                                    
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('add-product') }}" class="btn btn-primary btn-sm float-end">Add Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

   

