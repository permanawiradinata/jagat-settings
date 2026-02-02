<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Produk</h1>
    <a href="{{ route('products.create')}}">Tambah Produk</a>
    @if(session('success'))
    <div style="color:green;">
        {{ session('success')}}
    </div>
    @endif

    <form method="GET" action="{{ route('products.index') }}">
        <input type="text" name="search" placeholder="Cari produk...." value="{{ $search }}">
        <button type="submit">Cari</button>
    </form>

    <table border="1">
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $products->links() }}

    <a href="{{ route('dashboard')}}">dashboard</a>

</body>

</html>