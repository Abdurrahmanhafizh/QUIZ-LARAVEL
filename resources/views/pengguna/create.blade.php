@extends('layouts.app')
@section('content')
<h2> Tambah Data User </h2>
    <form action="{{ url('pengguna') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="user_email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="user_password" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="user_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="user_alamat" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="number" name="user_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection