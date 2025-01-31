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
                            <label class="form-table">Id Product</label>
                            <select name="id_product" class="form-control" id="">
                            @foreach($product as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $order->id_product ? 'selected' : ''}} disabled>{{ $data->name_product }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{ $order->quantity }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}" disabled>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Id Customer</label>
                            <select name="id_customer" class="form-control" id="">
                            @foreach($customer as $data)
                            <option value="{{ $data->id}}" {{ $data->id == $order->id_customer ? 'selected' : ''}} disabled>{{ $data->name_customer }}</option>
                            @endforeach
                        </select>
                        </div>

                        <a href="{{ route('order.index') }}" class="btn btn-primary">Back</a>

                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
