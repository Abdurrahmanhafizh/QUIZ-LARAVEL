@extends('layouts.app')
@section('content')
<h2> Edit Data Pelanggan </h2>
    <form action="{{ url('pelanggan/' .$row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">ID Golongan</label>
            <input type="number" name="pel_id_gol" id="" class="form-control" value="{{$row->pel_id_gol}}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{$row->pel_nama}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="pel_alamat" id="" cols="30" rows="10" class="form-control" >{{$row->pel_alamat}}</textarea>
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="number" name="pel_hp" id="" class="form-control" value="{{$row->pel_hp}}">
        </div>
        <div class="mb-3">
            <label for="">ID User</label>
            <input type="number" name="pel_id_user" id="" class="form-control" value="{{$row->pel_id_user}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="Edit" class="btn btn-warning">
        </div>
    </form>
@endsection