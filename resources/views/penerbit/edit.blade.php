@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Penerbit</div>              
               
                 <div class="card-body">
                
                 <form action="{{ route('penerbit.update', $penerbit->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @method('PUT')
                    
                        <div class="form-group mb-2">
                            <label class="form-table">Nama Penerbit</label>
                            <input type="text" class="form-control" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}">
                        </div>
                       
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>

@endsection
