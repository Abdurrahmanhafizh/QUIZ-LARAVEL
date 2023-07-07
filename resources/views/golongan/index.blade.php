@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Golongan </h2>
<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID GOLONGAN</th>
        <th>KODE GOLONGAN</th>
        <th>NAMA GOLONGAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->gol_id }}</td>
        <td>{{ $row->gol_kode }}</td>
        <td>{{ $row->gol_nama }}</td>
        <td><a href="{{ url('golongan/edit/' .$row->gol_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('golongan/' .$row->gol_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection