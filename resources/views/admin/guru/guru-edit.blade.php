@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">

        <h4 class="card-title">Edit Data Guru</h4>

        <h6 class="card-subtitle mb-4 text-muted">
            Ubah data guru SMA Negeri 24 Bandung
        </h6>

        <form
            action="{{ route('admin.guru.update', $guru->id_guru) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            {{-- Nama Guru --}}
            <div class="mb-3">
                <label class="form-label">
                    Nama Guru
                </label>

                <input
                    type="text"
                    name="nama_guru"
                    class="form-control"
                    value="{{ old('nama_guru', $guru->nama_guru) }}"
                    placeholder="Masukkan nama guru"
                    required
                >

                @error('nama_guru')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>


            {{-- NIP --}}
            <div class="mb-3">
                <label class="form-label">
                    NIP
                </label>

                <input
                    type="text"
                    name="nip"
                    class="form-control"
                    value="{{ old('nip', $guru->nip) }}"
                    placeholder="Masukkan NIP"
                    required
                >

                @error('nip')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>


            {{-- Mata Pelajaran --}}
            <div class="mb-3">
                <label class="form-label">
                    Mata Pelajaran
                </label>

                <input
                    type="text"
                    name="mapel"
                    class="form-control"
                    value="{{ old('mapel', $guru->mapel) }}"
                    placeholder="Masukkan mata pelajaran"
                    required
                >

                @error('mapel')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>


            {{-- Foto --}}
            <div class="mb-4">
                <label class="form-label">
                    Foto Guru
                </label>

                {{-- Foto lama --}}
                @if ($guru->foto)

                    <div class="mb-3">

                        <img
                            src="{{ asset('images/guru/' . $guru->foto) }}"
                            alt="{{ $guru->nama_guru }}"
                            width="80"
                            height="80"
                            class="rounded-circle"
                            style="object-fit: cover;"
                        >

                    </div>

                @endif

                {{-- Upload foto baru --}}
                <input
                    type="file"
                    name="foto"
                    class="form-control"
                    accept=".jpg,.jpeg,.png"
                >

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti foto.
                </small>

                @error('foto')
                    <br>
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>


            {{-- Tombol --}}
            <button type="submit" class="btn btn-primary">

                <i class="ti ti-device-floppy me-1"></i>
                Simpan Perubahan

            </button>

            <a
                href="{{ route('admin.guru') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection