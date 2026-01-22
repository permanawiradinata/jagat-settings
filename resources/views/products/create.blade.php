<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input name="name" placeholder="Nama Produk">
        <input name="price" placeholder="Harga">
        <input name="description" placeholder="Description">
        <button type="submit">Save</button>
    </form>


</html>