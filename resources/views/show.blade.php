<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Show Products</title>
</head>
<body class="bg-dark">
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Product Detail</h4>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            {{ $message }}
                        </div>
                    @endif
                    <div><b>Products Name:</b> {{ $products->name }}</div>
                    <div><b>Products Category:</b> {{ $products->category }}</div>
                    <div><b>Products Price:</b> {{ $products->price }}</div>
                    <div><b>Products Description:</b> {{ $products->description }}</div>
                    <div><b>Products Image:</b><img src="/image/{{ $products->file }}" width="100px"></div>
                </div>
                <div class="card-footer">
                    <a href="/creates/{{ $products->id }}/edit" class="btn btn-primary float-left">Edit</a>

                    <form action="/creates/{{ $products->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-1 float-left">Delete</button>
                    </form>

                    <a href="/creates" class="btn btn-primary float-right">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>