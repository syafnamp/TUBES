@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Data Pasien</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Umur</label>
                            <input type="text" name="umur" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">TTL</label>
                            <input type="date" name="tgllahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <input type="text" name="jeniskelamin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">+ Tambah Pasien</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">
                                << Kembali Ke Halaman Utama</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection