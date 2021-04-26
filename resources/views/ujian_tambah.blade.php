<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Latiah CRUD</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Latihan CRUD Ujian
                </div>
                <div class="card-body">
                    <a href="/ujian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ujian/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_mk" class="form-control" placeholder="Nama Mahasiswa ..">

                            @if($errors->has('nama_mk'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_mk')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Dosen</label>
                            <input name="dosen" class="form-control" placeholder="Dosen ..">

                             @if($errors->has('dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('dosen')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input name="jumlah_soal" class="form-control" placeholder="Jumlah Soal ..">

                             @if($errors->has('jumlah_soal'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_soal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan .."></textarea>

                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>