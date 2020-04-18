@extends('layouts.default')

@section('content')
<div class="card">
<div class="card-header">
<strong>Ubah Transaksi</strong>
<small>{{ $item -> uuid }}</small>
</div>
<div class="card-body card-block">
<form action="{{ route('transactions.update', $item->id) }}" method="POST">
    @method('PUT')
    @csrf
<div class="form-group">
<label for="name" class="form-control-label">Nama Pemesan</label>
<input type="text" name="name" value="{{old('name') ? old('name') : $item-> name }}" class="form-control @error('name') is-invalid @enderror" />
@error('name') <div class="text-muted">{{$message}} @enderror
</div>
<div class="form-group">
<label for="email" class="form-control-label">Email</label>
<input type="email" name="email" value="{{old('email') ? old('email') : $item-> email }}" class="form-control @error('email') is-invalid @enderror" />
@error('type') <div class="text-muted">{{$message}} @enderror
</div>

<div class="form-group">
<label for="number" class="form-control-label">Nomor Hape</label>
<input type="text" name="price" value="{{old('number') ? old('number') : $item-> number}}" class="form-control @error('number') is-invalid @enderror" />
@error('number') <div class="text-muted">{{$message}} @enderror
</div>

<div class="form-group">
    <label for="address" class="form-control-label">Nomor Hape</label>
    <input type="text" name="price" value="{{old('address') ? old('address') : $item-> address}}" class="form-control @error('address') is-invalid @enderror" />
    @error('address') <div class="text-muted">{{$message}} @enderror
    </div>

<div class="form-group">
<button class="primary btn btn-primary btn-block" type="submit">Ubah Transaksi</button>
</div>
</div>
</form>
</div>
</div>
@endsection