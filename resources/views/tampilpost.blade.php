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
        <h1>data berita</h1>
        <a href="/post" class="btn btn-sm btn-primary">+ tambah berita</a>
        <hr>
        <table class="table table-bordered table-hover">
            <thead class="bg-primary">
                <th>ID</th>
                <th>Judul</th>
                <th>isi</th>
            </thead>

            @foreach ($posts as $item)
                <tbody>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->isi }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
