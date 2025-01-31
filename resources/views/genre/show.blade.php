@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Genre</div>              
               
                 <div class="card-body">
                 <form action="{{ route('genre.update', $genre->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-table">Genre</label>
                            <input type="text" class="form-control" name="nama" value="{{ $genre->genre }}" disabled>
                        </div>
                        

                        <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
