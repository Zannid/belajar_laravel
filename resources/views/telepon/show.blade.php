@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>

                
               
                 <div class="card-body">
                    @csrf
                    @method('PUT')
        
                        <div class="form-group mb-2">
                            <label class="form-table">Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Id Pengguna</label>
                            <select name="id_pengguna" class="form-control" id="">
                            @foreach($pengguna as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $telepon->id_pengguna ? 'selected' : ''}} disabled>{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        </div>

                        <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>

                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
