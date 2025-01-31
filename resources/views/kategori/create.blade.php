@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kategori</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('kategori.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                        <div class="form-group mb-2">
                            <label class="form-table">Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
