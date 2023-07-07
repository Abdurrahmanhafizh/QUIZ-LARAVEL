@extends('layouts.app')
@section('content')
<h2> Edit Data Golongan </h2>
    <form action="{{ url('golongan/' .$row->gol_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">Kode Golongan</label>
            <input type="text" name="gol_kode" id="" class="form-control" value="{{$row->gol_kode}}">
        </div>
        <div class="mb-3">
            <label for="">Nama Golongan</label>
            <input type="text" name="gol_nama" id="" class="form-control" value="{{$row->gol_nama}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="update" class="btn btn-warning">
        </div>
    </form>
@endsection