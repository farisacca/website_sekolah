<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

class SiswaController extends Controller
{
    /**
     * Menampilkan semua data siswa
     */
    public function index()
    {
        $siswa = Siswa::all();

        $data = [
            'title' => 'Siswa',
            'siswa' => $siswa
        ];

        return view('admin.siswa', $data);
    }

    /**
     * Menampilkan form tambah siswa
     */
    public function create()
    {
        return view('siswa.siswa-create', [
            'title' => 'Tambah Siswa'
        ]);
    }

    /**
     * Menyimpan data siswa
     */
    public function store(StoreSiswaRequest $request)
    {
        $validated = $request->validated();

        Siswa::create($validated);

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit siswa
     */
    public function edit($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        return view('siswa.siswa-edit', [
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa
        ]);
    }

    /**
     * Update data siswa
     */
    public function update(UpdateSiswaRequest $request, $id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        $validated = $request->validated();

        $siswa->update($validated);

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Hapus data siswa
     */
    public function destroy($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        $siswa->delete();

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}