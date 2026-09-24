<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $siswa = Siswa::all();
            $data = [
                'title' => 'Siswa',
                'siswa' => $siswa
            ];
            return view('admin.siswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $id_siswa)
    {
        //
        $siswa = Siswa::findOrFail($id_siswa);

        return view('siswa.siswa-edit', [
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $id_siswa)
    {
        //

        $siswa = Siswa::findOrFail($id_siswa);

        $validate = $request->validate([
            'nisn' => 'required|max:10',
            'nama_siswa' => 'required|max:40',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tahun_masuk' => 'required|digits:4',
        ]);

        $siswa->update($validate);

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil diperbarui.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $id_siswa)
    {
        //

        $siswa = Siswa::findOrFail($id_siswa);

        $siswa->delete();

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data berhasil di hapus.');
    }
}
