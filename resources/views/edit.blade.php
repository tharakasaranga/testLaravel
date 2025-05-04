<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update New Product</h1>

    <form action="{{route('products.update', $product->id)}}" method="POST">

        @csrf
        @method('PUT')
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" value = "{{$product ->name}}"><br><br>

        <label for="description">Product Description:</label><br>
        <input type = "text" id="description" name="description" value = "{{$product ->description}}" /><br><br>

        <label for="price">Product Price:</label><br>
        <input type="text" id="price" name="price" value = "{{$product ->price}}"><br><br>

        <label for="Quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" value = "{{$product ->quantity}}"><br><br>

        <input type="submit" value="Update Product">


</body>
</html>
