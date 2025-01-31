@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('buku.update', $buku->id)}}" method="post" enctype="multipart/form-data">
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
                            <label class="form-table">Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}">
                        </div>
                        
                        <div class="form-group mb-2">
                            <label class="form-table">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Image</label>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Penerbit</label>
                            <select name="id_penerbit" class="form-control" id="">
                            @foreach($penerbit as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $buku->id_penerbit ? 'selected' : ''}}>{{ $data->nama_penerbit }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Genre</label>
                            <select name="id_genre" class="form-control" id="">
                            @foreach($genre as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $buku->id_genre ? 'selected' : ''}}>{{ $data->genre }}</option>
                            @endforeach
                        </select>
                        </div>

                      
                        

                        <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
