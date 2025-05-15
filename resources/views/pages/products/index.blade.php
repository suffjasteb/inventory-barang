<!-- {{-- disini kita akan coba untuk menggunakan layout yang sudah kita buat --}} -->
@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Product</h1>
    </div>
    <div class="col-sm-6">
        <div class="breadcrump float-sm-right">
            <div class="breadcrump-iten"><a href="#">Home</a></div>
            <div class="breadcrump-item">Product</div>
        </div>
    </div>
</div>
@endsection

{{-- Ini menandakan bagian konten yang akan diisi ke dalam layout utama. --}}
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
           <div class="card-header justify-content-end d-flex">
            <a href="/products/create">
                <button class="btn btn-sm btn-primary">Tambahh barang</button>
            </a>
        </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  {{--  --}}
                  <tbody>
                   @foreach ( $products as $product )
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td><a href="/products/edit/{{ $product->id }}" class="btn btn-success btn-sm">Edit</a></td>
                    <td>
                        <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('yakin ingin hapus produk ini ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection