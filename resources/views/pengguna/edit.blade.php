@extends('layouts.app')
@section('content')
<h2> Edit Data User </h2>
    <form action="{{ url('pengguna/' .$row->user_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="user_email" id="" class="form-control" value="{{$row->user_email}}">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="user_password" id="" class="form-control" value="{{$row->user_password}}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="user_nama" id="" class="form-control" value="{{$row->user_nama}}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="user_alamat" id="" cols="30" rows="10" class="form-control">{{$row->user_alamat}}</textarea>
        </div>
        <div class="mb-3">
            <label for="">No Hp</label>
            <input type="number" name="user_hp" id="" class="form-control" value="{{$row->user_hp}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection