@extends('layout.fani')
@section('content')
<a href="/">tambah data</a>
<table border="2" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>nama</th>
            <th>email</th>
            <th>password</th>
            <th>nomortelepon</th>
            <th>aksi</th>
        </tr>
    </thead>
<tbody>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->nomortelepon}}</td>
        <td>
            <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->name.'/edit')}}">Edit</a>
            <form onsubmit="return confirm('apakah yakin?')" class="d-inline" action="{{'/isian/'.$item->name}}" method="post"> @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection