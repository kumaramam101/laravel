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
            <div class="col-md-8 mt-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit products</h4>
                        @if (session('status'))
                            <h6 class="alert alert-success">{{ session('status') }}</h6>  
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-2">
                                <label for="">Product name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Product Description</label>
                                <input type="text" name="description" value="{{ $product->description }}" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Product price</label>
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="" class="d-block">Product image</label>
                                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="image" width="80px" height="80px">
                                <input type="file" name="image" value="{{ asset('uploads/product/'.$product->image) }}" class="form-control">
                                
                            </div>
                            <div class="form-group mb-2">
                                <a href="{{ url('product') }}" class="btn btn-primary float-start">View</a>
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

   

