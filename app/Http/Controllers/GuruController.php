<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Menampilkan semua data guru
     */
    public function index()
    {
        $guru = Guru::all();

        return view('admin.guru', [
            'title' => 'Data Guru',
            'guru' => $guru
        ]);
    }


    /**
     * Menampilkan form tambah guru
     */
    public function create()
    {
        return view('admin.guru.guru-create', [
            'title' => 'Tambah Guru'
        ]);
    }


    /**
     * Menyimpan data guru baru
     */
    public function store(StoreGuruRequest $request)
    {
        $validated = $request->validated();

        // Jika ada foto
        if ($request->hasFile('foto')) {

            $foto = $request->file('foto');

            $namaFoto = time() . '.' .
                $foto->getClientOriginalExtension();

            $foto->move(
                public_path('images/guru'),
                $namaFoto
            );

            $validated['foto'] = $namaFoto;
        }

        Guru::create($validated);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }


    /**
     * Menampilkan form edit guru
     */
    public function edit($id_guru)
    {
        $guru = Guru::findOrFail($id_guru);

        return view('admin.guru.guru-edit', [
            'title' => 'Edit Guru',
            'guru' => $guru
        ]);
    }


    /**
     * Mengupdate data guru
     */
    public function update(Request $request, $id_guru)
    {
        $guru = Guru::findOrFail($id_guru);

        $validated = $request->validate([
            'nama_guru' => 'required|max:40',
            'nip' => 'required|max:15',
            'mapel' => 'required|max:40',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {

            if (
                $guru->foto &&
                File::exists(
                    public_path('images/guru/' . $guru->foto)
                )
            ) {
                File::delete(
                    public_path('images/guru/' . $guru->foto)
                );
            }

            $foto = $request->file('foto');

            $namaFoto = time() . '.' .
                $foto->getClientOriginalExtension();

            $foto->move(
                public_path('images/guru'),
                $namaFoto
            );

            $validated['foto'] = $namaFoto;
        }

        $guru->update($validated);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil diperbarui.');
    }


    /**
     * Menghapus data guru
     */
    public function destroy($id_guru)
    {
        $guru = Guru::findOrFail($id_guru);

        if (
            $guru->foto &&
            File::exists(
                public_path('images/guru/' . $guru->foto)
            )
        ) {
            File::delete(
                public_path('images/guru/' . $guru->foto)
            );
        }

        $guru->delete();

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}