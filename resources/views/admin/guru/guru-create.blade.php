@extends('index')

@section('title', 'Tambah Guru')

@section('content')

<div class="card">
    <div class="card-body">

        <h4 class="card-title">
            Tambah Guru
        </h4>

        <h6 class="card-subtitle mb-4 text-muted">
            Tambahkan data guru SMA Negeri 24 Bandung
        </h6>

        <form action="{{ route('admin.guru.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            {{-- Nama Guru --}}
            <div class="mb-3">

                <label class="form-label">
                    Nama Guru
                </label>

                <input
                    type="text"
                    name="nama_guru"
                    class="form-control"
                    value="{{ old('nama_guru') }}"
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
                    value="{{ old('nip') }}"
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
                    value="{{ old('mapel') }}"
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

                <input
                    type="file"
                    name="foto"
                    class="form-control"
                    accept=".jpg,.jpeg,.png"
                >

                <small class="text-muted">
                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                </small>

                @error('foto')
                    <br>
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <button type="submit"
                    class="btn btn-primary">

                <i class="ti ti-device-floppy me-1"></i>
                Simpan

            </button>

            <a href="{{ route('admin.guru') }}" class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>
</div>

@endsection