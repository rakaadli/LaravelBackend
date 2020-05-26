@extends('layouts.default')

@section('content')
<div class="card">
<div class="card-header">
<strong>Tambah Barang</strong>
</div>
<div class="card-body card-block">
<form action="{{route('products.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="name" class="form-control-label">Nama Barang</label>
<input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror"></input>
@error('name') <div class="text-muted">{{$message}} @enderror
</div>
<div class="form-group">
<label for="type" class="form-control-label">Type Barang</label>
<input type="type" name="type" value="{{old('type')}}" class="form-control @error('name') is-invalid @enderror"></input>
@error('type') <div class="text-muted">{{$message}} @enderror
</div>
<div class="form-group">
<label for="description" class="form-control-label">Deskripsi Barang</label>
<textarea name='description' class="ckeditor form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
@error('description') <div class="text-muted">{{$message}} @enderror
</div>

<div class="form-group">
<label for="price" class="form-control-label">Harga Barang</label>
<input type="number" name="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror"></input>
@error('price') <div class="text-muted">{{$message}} @enderror
</div>

<div class="form-group">
<label for="quantity" class="form-control-label">Kuantitas Barang</label>
<input type="number" name="quantity" value="{{old('quantity')}}" class="form-control @error('price') is-invalid @enderror"></input>
@error('quantity') <div class="text-muted">{{$message}} @enderror
</div>
<div class="form-group">
<button class="primary btn btn-primary btn-block" type="submit">Tambah Barang</button>
</div>
</div>
</form>
</div>
</div>
@endsection