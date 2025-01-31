@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Customer</div>              
               
                 <div class="card-body">
                 <form action="{{ route('customer.update', $customer->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                            <label class="form-table">Name Customer</label>
                            <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}" disabled>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input type="radio" name="gender" id="male" value="Laki-Laki" {{ $customer->gender == 'Laki-Laki' ? 'checked' : '' }} disabled>
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="female" value="Perempuan" {{ $customer->gender == 'Perempuan' ? 'checked' : '' }} disabled>
                                    <label for="female">Perempuan</label>
                                </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $customer->contact }}" disabled>
                        </div>
                       
                        

                        <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
