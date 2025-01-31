@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Kategori</div>              
               
                 <div class="card-body">
                 <form action="{{ route('product.update', $product->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                            <label class="form-table">Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" disabled>
                        </div>
                        

                        <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
