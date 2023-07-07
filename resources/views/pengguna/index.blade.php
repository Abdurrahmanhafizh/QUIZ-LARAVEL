@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data User </h2>
<a href="{{ url('pengguna/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID USER</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->user_id }}</td>
        <td>{{ $row->user_email }}</td>
        <td>{{ $row->user_password }}</td>
        <td>{{ $row->user_nama }}</td>
        <td>{{ $row->user_alamat }}</td>
        <td><a href="{{ url('pengguna/edit/' .$row->user_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pengguna/' .$row->user_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection