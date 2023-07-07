@extends('layouts.app')
@section('content')
<h2> Tambah Data Pelanggan </h2>
    <form action="{{ url('pelanggan') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">ID Golongan</label>
            <input type="number" name="pel_id_gol" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="pel_alamat" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="number" name="pel_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ID User</label>
            <input type="number" name="pel_id_user" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
@endsection