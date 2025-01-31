@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Customer</div>

                
               
                 <div class="card-body">
                 <form action="{{ route('customer.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                        <div class="form-group mb-2">
                            <label class="form-table">Name Customer</label>
                            <input type="text" class="form-control" name="name_customer">
                        </div>
                        <div class="d-flex align-items-center gap-3">
                                <div>
                                    <input type="radio" name="gender" id="male" value="Laki-Laki">
                                    <label for="male">Laki-Laki</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="female" value="Perempuan">
                                    <label for="female">Perempuan</label>
                                </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-table">contact</label>
                            <input type="number" class="form-control" name="contact">
                        </div>
                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                 </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
