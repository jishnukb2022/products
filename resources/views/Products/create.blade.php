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
                    <h3>Product Add Form</h3>
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


<form action="/create" method="post">

    @csrf
        <div class="form-group">
          <label for="product">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Category</label>
          <input type="text" id="category" name="category" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Price</label>
          <input type="text" id="price" name="price" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="product">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
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