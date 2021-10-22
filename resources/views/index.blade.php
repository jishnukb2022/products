<!DOCTYPE html>
<html lang="en">
<head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  

}

tr,{
  background-color: #dddddd;
  
}

</style>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<table class="table" style="font-size:20px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Products Name</th>
      <th scope="col">Products Category</th>
      <th scope="col">Products Price</th>
      <th scope="col">Description</th>
      <th scope="col">Images </h>
    </tr>
  </thead>
  <tbody>

    @foreach($products as $product)

    <tr>
      <th scope="row">{{$product->id}}</th>
      <td><a href="/creates/{{$product->id}}">{{$product->name}}</a></td>
      <td>{{$product->category}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>
      <td><img src="/image/{{ $product->file }}" width="100px"></td>
    </tr>
    
   @endforeach
  </tbody>
</table>

      {{$products->onEachSide(1)->links()}}

</body>
</html>