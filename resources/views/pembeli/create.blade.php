@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pembeli</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('pembeli.store')}}" method="post" enctype="multipart/form-data">
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
                        <div class="form-group mb-2">
                            <label class="form-table">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli">
                        </div>
                        <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input type="radio" name="jenis_kelamin" id="male" value="Laki-Laki">
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input type="radio" name="jenis_kelamin" id="female" value="Perempuan">
                                    <label for="female">Perempuan</label>
                                </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Telepon</label>
                            <input type="number" class="form-control" name="telepon">
                        </div>
                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
