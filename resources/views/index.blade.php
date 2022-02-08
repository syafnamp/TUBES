@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
            <div class="col-lg-8">
                <h1>Pasien</h1>
                <a href="{{url('create')}}" class="btn btn-primary">+ Tambah Pasien </a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Keluhan</th>
                        <th>Action</th>
                    </tr>
                    @php $no = 1; @endphp
                    @foreach ($data as $dataPasien)
                    <tr>
                        <td>{{$no++ }}</td>
                        <td>{{ $dataPasien->nama }}</td>
                        <td>{{ $dataPasien->umur }}</td>
                        <td>{{ $dataPasien->alamat }}</td>
                        <td>{{ $dataPasien->status }}</td>
                        <td>{{ $dataPasien->tgllahir }}</td>
                        <td>{{ $dataPasien->jeniskelamin }}</td>
                        <td>{{ $dataPasien->keluhan }}</td>
                        <td>
                            <a href="{{url('/show/'.$dataPasien->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('/destroy/'.$dataPasien->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
    </section>
@endsection