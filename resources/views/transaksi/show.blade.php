@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Buku</div>

                
               
                 <div class="card-body">
                    @csrf
                    @method('PUT')
        
                    <div class="form-group mb-2">
                            <label class="form-table">jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $buku->jumlah }}" disabled>
                        </div>
                        
                        <div class="form-group mb-2">
                            <label class="form-table">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $buku->tanggal_transaksi }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Buku</label>
                            <select name="id_buku" class="form-control" id="">
                            @foreach($buku as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $buku->id_buku ? 'selected' : ''}} disabled>{{ $data->nama_buku }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Pembeli</label>
                            <select name="id_pembeli" class="form-control" id="">
                            @foreach($pembeli as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $pembeli->id_pembeli ? 'selected' : ''}} disabled>{{ $data->nama_pembeli }}</option>
                            @endforeach
                        </select>
                        </div>

                        <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>

                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
