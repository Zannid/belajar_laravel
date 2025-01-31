@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kategori</div>              
               
                 <div class="card-body">
                 <form action="{{ route('kategori.update', $kategori->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                        <div class="form-group mb-2">
                            <label class="form-table">Kategori</label>
                            <input type="text" class="form-control" name="nama" value="{{ $kategori->nama_kategori }}">
                        </div>
                       
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
