@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Produk</div>
                <div class="card-body">
                <div class="arcd-body">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Add</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Id Kategori</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($produk as $data)
                        <tr>
                        <th scope="row">{{ $no++}}</th>

                        <td>{{ $data->nama_produk }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->stock }}</td>
                        <td>{{ $data->kategori->nama_kategori }}</td>
                        <td>
                            <img src="{{ asset('images/produk/' . $data->cover)}}" width="100" >
                        </td>
                        <!-- <td>{{ $data->id_pengguna }}</td> -->
                        
                        <td>
                            <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('produk.show', $data->id) }}" class="btn btn-warning">Show</a>
                           
                            <form action="{{ route('produk.destroy', $data->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach

                    </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
