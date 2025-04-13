{{-- disini kita akan coba untuk menggunakan layout yang sudah kita buat --}}
@extends('layouts.main')

@section('header')
<div class="row-md-2">
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
<h1>hello world</h1>
@endsection