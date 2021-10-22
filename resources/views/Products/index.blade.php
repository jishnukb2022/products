<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>

    @foreach($products as $product)

    <tr>
      <th scope="row">{{$product->id}}</th>
      <td><a href="/create/{{$product->id}}">{{$product->name}}</a></td>
      <td>{{$product->category}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>
    </tr>
    
   @endforeach
  </tbody>
</table>
    
</body>
</html>