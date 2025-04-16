{{-- disini kita akan coba untuk menggunakan layout yang sudah kita buat --}}


@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Tambah Product</h1>
    </div>
    <div class="breadcrumb float-sm-right">
        <div class="breadcrumb-item"><a href="#">Home</a></div>
        <div class="breadcrumb-item">Product</div>
    </div>    
</div>
@endsection

{{-- Ini menandakan bagian konten yang akan diisi ke dalam layout utama. --}}
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            
            <form action="/products/store" method="POST">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan deskripsi produk">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="sku">Kode Produk</label>
                        <input type="text" id="sku" name="sku" class="form-control @error('sku') is-invalid @enderror" placeholder="Masukkan kode produk" value="{{ old('sku') }}">
                        @error('sku')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" inputmode="numeric" placeholder="Masukkan harga produk" value="{{ old('price') }}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Masukkan jumlah stok" value="{{ old('stock') }}">
                        @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                           <option value="" disabled selected>Pilih kategori</option>
                           @foreach ($categories as $category)
                               <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                   {{ $category->name }}
                               </option>
                           @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/products" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection