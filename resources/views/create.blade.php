<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add New Product</h1>

    <form action="{{route('products.store')}}" method="POST">

        @csrf
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="description">Product Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="price">Product Price:</label><br>
        <input type="text" id="price" name="price"><br><br>

        <label for="Quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br><br>

        <input type="submit" value="Add Product">


</body>
</html>
