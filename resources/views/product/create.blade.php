@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kategori</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                        <div class="form-group mb-2">
                            <label class="form-table">Name Product</label>
                            <input type="text" class="form-control" name="name_product">
                            @error('name_product')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Merk</label>
                            <input type="text" class="form-control" name="merk">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">stock</label>
                            <input type="number" class="form-control" name="stock">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
