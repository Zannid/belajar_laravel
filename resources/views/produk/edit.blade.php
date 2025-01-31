@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Produk</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('produk.update', $produk->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
        
                    <div class="form-group mb-2">
                            <label class="form-table">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Harga</label>
                            <input type="number" class="form-control" name="harga">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Stok</label>
                            <input type="number" class="form-control" name="stock">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Id Kategori</label>
                            <select name="id_kategori" class="form-control" id="">
                            @foreach($kategori as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $produk->id_kategori ? 'selected' : ''}}>{{ $data->nama_kategori }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Cover</label>
                            <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                            <input type="file" class="form-control" name="cover" value="{{ $produk->cover }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
