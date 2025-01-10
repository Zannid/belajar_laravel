@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data siswa</div>              
               
                 <div class="card-body">
                 <form action="{{ route('siswa.update', $siswa->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-table">NIS</label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-table">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jk" value="{{ $siswa->jenis_kelamin }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}" disabled>
                        </div>

                        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
