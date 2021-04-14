<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container"><br>
        <h1>data produk</h1>
        <a href="/formAdd" class="btn btn-sm btn-primary">+ tambah produk</a>
        <a href="/updateProduk" class="btn btn-sm btn-danger">test update</a>
        <a href="/deleteProduk" class="btn btn-sm btn-danger">test delate</a>
        <hr>
        <table class="table table-bordered table-hover">
            <thead class="bg-primary">
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>harga</th>
                <th>Deskripsi</th>
                <th>jumlah</th>
                <th>Update_at</th>
                <th>Created_at</th>
            </thead>

            @foreach ($barang as $item)
                <tbody>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->namaProduk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
