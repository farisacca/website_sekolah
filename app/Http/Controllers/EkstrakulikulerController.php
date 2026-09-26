<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Http\Requests\StoreEkstrakulikulerRequest;
use App\Http\Requests\UpdateEkstrakulikulerRequest;
use Illuminate\Support\Facades\File;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $eskul = Ekstrakulikuler::all();
            $data = [
                'title' => 'Ekstrakulikuler',
                'eskul' => $eskul
            ];
            return view('admin.ekstrakulikuler', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.ekstrakulikuler.ekstrakulikuler-create', [
            'title' => 'Tambah Ekstrakurikuler'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEkstrakulikulerRequest $request)
    {
        //
        $validated = $request->validate([
            'nama_eskul' => 'required|max:40',
            'pembina' => 'required|max:40',
            'jadwal_latihan' => 'required|max:40',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(
                public_path('images/eskul'),
                $namaGambar
            );

            $validated['gambar'] = $namaGambar;
        }

        Ekstrakulikuler::create($validated);

        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekstrakulikuler $ekstrakulikuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstrakulikuler $id_eskul)
    {
        //
        $eskul = Ekstrakulikuler::findOrFail($id_eskul);

        return view('admin.ekstrakulikuler.ekstrakulikuler-edit', [
            'title' => 'Edit Ekstrakurikuler',
            'eskul' => $eskul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEkstrakulikulerRequest $request, Ekstrakulikuler $id_eskul)
    {
        //
        $eskul = Ekstrakulikuler::findOrFail($id_eskul);

        $validated = $request->validate([
            'nama_eskul' => 'required|max:40',
            'pembina' => 'required|max:40',
            'jadwal_latihan' => 'required|max:40',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {

            if (
                $eskul->gambar &&
                File::exists(public_path('images/eskul/' . $eskul->gambar))
            ) {
                File::delete(
                    public_path('images/eskul/' . $eskul->gambar)
                );
            }

            $gambar = $request->file('gambar');

            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            $gambar->move(
                public_path('images/eskul'),
                $namaGambar
            );

            $validated['gambar'] = $namaGambar;
        }

        $eskul->update($validated);

        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakulikuler $id_eskul)
    {
        //
        $eskul = Ekstrakulikuler::findOrFail($id_eskul);

        if (
            $eskul->gambar &&
            File::exists(public_path('images/eskul/' . $eskul->gambar))
        ) {
            File::delete(
                public_path('images/eskul/' . $eskul->gambar)
            );
        }

        $eskul->delete();

        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}
