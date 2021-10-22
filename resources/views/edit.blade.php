<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container">
<div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Product Update Form</h3>
                </div>

<div class= "card-body">
@if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $message)
                {{ $message }} <br>
            @endforeach
        </div>
    @endif

  @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                {{ $message }}
                            </div>
    @endif


<form action="/creates/{{ $products->id }}" method="post" enctype="multipart/form-data">
@method('PUT')

    @csrf
        <div class="form-group">
          <label for="product">Products Name</label>
          <input type="text" id="name" name="name" value="{{ $products->name }}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Products Category</label>
          <input type="text" id="category" name="category" value="{{ $products->category }}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Products Price</label>
          <input type="text" id="price" name="price" value="{{ $products->price }}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Products Description</label>
          <textarea name="description" value="{{ $products->description }}" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
        <label for="product">Products Image</label>
        <input type="file" name="file"  required>
        <img src="image/{{ $products->file }}" width="300px">
    </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
</form>
</div>

</div>
<div>
</div>
</div>
</body>
</html>