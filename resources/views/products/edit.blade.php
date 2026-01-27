<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Produk</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <input name="name" value="{{ $product->name }}">
        <input name="price" value="{{ $product->price }}">
        <input name="description" value="{{ $product->description }}">

        <button type="submit">Update</button>
    </form>
</body>

</html>