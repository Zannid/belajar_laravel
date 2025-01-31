@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Produk</div>

                
               
                 <div class="card-body">
                    @csrf
                    @method('PUT')
        
                    <div class="form-group mb-2">
                            <label class="form-table">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Stok</label>
                            <input type="number" class="form-control" name="stock" value="{{ $produk->stock }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Id kategori</label>
                            <select name="id_kategori" class="form-control" id="">
                            @foreach($kategori as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $produk->id_kategori ? 'selected' : ''}} disabled>{{ $data->nama_kategori }}</option>
                            @endforeach
                        </select>
                        </div>

                        <a href="{{ route('produk.index') }}" class="btn btn-primary">Back</a>

                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
