@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data siswa PPDB</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('ppdb.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                        <div class="form-group mb-2">
                            <label class="form-table">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-table">Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-laki
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Agama</label>
                            <input type="text" class="form-control" name="agama">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Alamat</label>
                            <textarea name="alamat" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Telepon</label>
                            <input type="number" class="form-control" name="telepon">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Asal Sekolah</label>
                            <input type="text" class="form-control" name="sekolah">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
