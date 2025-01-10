@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data siswa</div>              
               
                 <div class="card-body">
                 <form action="{{ route('ppdb.update', $ppdb->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-table">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $ppdb->nama }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-table">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{ $ppdb->jenis_kelamin }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $ppdb->agama }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $ppdb->alamat }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="number" class="form-control" name="telepon" value="{{ $ppdb->telepon }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" name="sekolah" value="{{ $ppdb->asal_sekolah }}" disabled>
                        </div>

                        <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
