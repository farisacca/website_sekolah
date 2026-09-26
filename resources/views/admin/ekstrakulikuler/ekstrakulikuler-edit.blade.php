@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">

        <h4 class="card-title">
            Edit Ekstrakurikuler
        </h4>

        <h6 class="card-subtitle mb-4 text-muted">
            Ubah data ekstrakurikuler SMA Negeri 24 Bandung
        </h6>

        <form action="{{ route('admin.ekstrakulikuler.update', ['id_eskul' => $eskul->id_eskul]) }}"
            method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Ekstrakurikuler</label>

                <input type="text" name="nama_eskul" class="form-control" value="{{ old('nama_eskul', $eskul->nama_eskul) }}"
                    required>

                @error('nama_eskul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Pembina</label>

                <input type="text" name="pembina" class="form-control" value="{{ old('pembina', $eskul->pembina) }}"
                    required>

                @error('pembina')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jadwal Latihan</label>

                <input type="text" name="jadwal_latihan" class="form-control" value="{{ old('jadwal_latihan', $eskul->jadwal_latihan) }}"
                    required>

                @error('jadwal_latihan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>

                <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $eskul->deskripsi) }}</textarea>

                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Gambar</label>

                @if($eskul->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('images/eskul/' . $eskul->gambar) }}" width="100" height="100" style="object-fit: cover;"
                            class="rounded">
                    </div>
                @endif

                <input type="file" name="gambar" class="form-control" accept=".jpg,.jpeg,.png">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>

                @error('gambar')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="ti ti-device-floppy me-1"></i>
                Simpan Perubahan
            </button>

            <a href="{{ route('admin.ekstrakulikuler') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection