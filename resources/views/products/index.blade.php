<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <div class="input-group">
            <h2 class="mb-3">Daftar Produk</h2>
            <a href="{{ route('dashboard')}}" class="mt-1" style="margin-left: 30px;">dashboard</a>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
        @endif

        <form method="GET" action="{{ route('products.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari produk...." value="{{ $search }}">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>


        <a href="{{ route('products.create')}}" class="btn btn-success mb-3">+ Tambah Produk</a>

        <table class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>Price</th>
                <th>Description</th>
                <th width="150">Aksi</th>
            </tr>

            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {{ $products->links() }}

    </div>
</body>

</html>