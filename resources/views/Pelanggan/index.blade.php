@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Pelanggan </h2>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>NAMA</th>
        <th>HP</th>
        <th>ID GOL</th>
        <th>ID USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->pel_id }}</td>
        <td>{{ $row->pel_nama }}</td>
        <td>{{ $row->pel_hp }}</td>
        <td>{{ $row->pel_id_gol }}</td>
        <td>{{ $row->pel_id_user }}</td>
        <td><a href="{{ url('pelanggan/edit/' .$row->pel_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection