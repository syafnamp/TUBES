@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Data Pasien</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" value="{{$data->umur}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat">{{$data->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$data->status}}">
                        </div>
                        <div class="form-group">
                            <label for="namtgllahira">TTL</label>
                            <input type="date" name="tgllahir" class="form-control" value="{{$data->tgllahir}}">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <input type="text" name="jeniskelamin" class="form-control" value="{{$data->jeniskelamin}}">
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" value="{{$data->keluhan}}">
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