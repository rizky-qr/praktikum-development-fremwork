<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>title</title>
</head>

<body>
    <div class="container"><br>
        <h1>Tambah Data</h1>
        {{-- <form action="tambah" method="POST"> --}}
        <form action="insertpost" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul') }}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" name="isi" id="isi" value="{{ old('isi') }}">
                @error('isi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>


    </div>
</body>

</html>
