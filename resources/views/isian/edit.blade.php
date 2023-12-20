@extends('layout.fani')
@section('content')
<h3>input data pemain bulutangkis untirta</h3>
<form method="post" action="{{'/isian/'.$data->name}}">
   @csrf
    @method('put')
<div class="mb-3">
    <label for="name" class="form-label">name:</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{Session::get('name')}}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">email:</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="email" value="{{Session::get('email')}}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">password:</label>
    <input type="text" id="password" name="password" class="form-control" placeholder="password" value="{{Session::get('password')}}">
</div>
<h3>password tidak bisa diubah!</h3>
<div class="mb-3">
    <label for="nomortelepon" class="form-label">nomortelepon:</label>
    <input type="text" id="nomortelepon" name="nomortelepon" class="form-control" placeholder="nomortelepon" value="{{Session::get('nomortelepon')}}">
</div>
<div class="mb-3">
    <button>submit</button> <a class="btn btn-secondry" href="/isian">kembali</a>
</div>
</form>
@endsection