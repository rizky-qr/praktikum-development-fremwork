<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Pendaftaran siswa</h1>
                <form action="{{url('/proses-reg')}}" method="post">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}">
                            @error('nama')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="L">
                                    <Label class="form-check-label">Laki-laki</Label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="P">
                                    <Label class="form-check-label">Perempuan</Label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option value="TI">Teknik Informatika</option>
                                <option value="MI">Manajemen Informatika</option>
                            </select>
                            @error('jurusan')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                        @error('alamat')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
