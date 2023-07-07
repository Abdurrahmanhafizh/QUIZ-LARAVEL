<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pengguna::all();
        return view('pengguna.index', compact('rows'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengguna::create([
            'user_email' => $request->user_email,
            'user_password' => $request->user_password,
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp
        ]);
        return redirect('pengguna');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pengguna::find($id);
        return view('pengguna.edit', compact('row'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pengguna::findOrFail($id);
        $row->update([
            'user_email' => $request->user_email,
            'user_password' => $request->user_password,
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp
        ]);
        return redirect('pengguna');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pengguna::findOrFail($id);
        $row->delete();
        return redirect('pengguna');
    }
}