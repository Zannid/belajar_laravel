@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Produk</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('order.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                        <div class="form-group mb-2">
                            <label class="form-table">Id Product</label>
                            <select name="id_product" class="form-control" id="">
                            @foreach($product as $data)
                            <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Quantity</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Order Date</label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Id Customer</label>
                            <select name="id_customer" class="form-control" id="">
                            @foreach($customer as $data)
                            <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                            @endforeach
                        </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
