<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h1>Kalkulator</h1>
                <hr>
                <form action="{{url('/hasil')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="angka1">Angka Pertama</label>
                            <input type="text" class="form-control" name="angka1" id="angka1" value="{{old('angka1')}}">
                            @error('angka1')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="angka2">Angka Kedua</label>
                            <input type="text" class="form-control" name="angka2" id="angka2" value="{{old('angka2')}}">
                            @error('angka2')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="calculator" id="tambah"
                                        value="Penjumlahan">
                                    <Label class="form-check-label ml-1"> Penjumlahan</Label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="calculator" id="kurang"
                                        value="Pengurangan">
                                    <Label class="form-check-label ml-1"> Pengurangan</Label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="calculator" id="kali"
                                        value="Perkalian">
                                    <Label class="form-check-label ml-1"> Perkalian</Label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-label" type="radio" name="calculator" id="bagi"
                                        value="Pembagian">
                                    <Label class="form-check-label ml-1"> Pembagian</Label>
                                </div>
                            </div>
                            @error('calculator')
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
