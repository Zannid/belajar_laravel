@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Produk</div>              
               
                 <div class="card-body">
                 <form action="{{ route('customer.update', $customer->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-2">
                            <label class="form-table">Name customer</label>
                            <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}">
                        </div>
                        <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input type="radio" name="gender" id="male" value="Laki-Laki" {{ $customer->gender == 'Laki-Laki' ? 'checked' : '' }}>
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="female" value="Perempuan" {{ $customer->gender == 'Perempuan' ? 'checked' : '' }}>
                                    <label for="female">Perempuan</label>
                                </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $customer->contact }}">
                        </div>
                        
                       
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
