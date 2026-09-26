@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">

        <h4 class="card-title">
            Tambah Ekstrakurikuler
        </h4>

        <h6 class="card-subtitle mb-4 text-muted">
            Tambahkan data ekstrakurikuler SMA Negeri 24 Bandung
        </h6>

        <form action="{{ route('admin.ekstrakulikuler.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Ekstrakurikuler</label>

                <input type="text" name="nama_eskul" class="form-control" value="{{ old('nama_eskul') }}"
                    placeholder="Contoh: Paskibra SMAN 24 Bandung" required>

                @error('nama_eskul')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Pembina</label>

                <input type="text" name="pembina" class="form-control" value="{{ old('pembina') }}" placeholder="Contoh: Dedi Kurniawan, S.Pd."
                    required>

                @error('pembina')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jadwal Latihan</label>

                <input type="text" name="jadwal_latihan" class="form-control" value="{{ old('jadwal_latihan') }}" placeholder="Contoh: Setiap Rabu & Sabtu 15:30 WIB"
                required>

                @error('jadwal_latihan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>

                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi ekstrakurikuler" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Gambar</label>

                <input type="file" name="gambar" class="form-control" accept=".jpg,.jpeg,.png">

                <small class="text-muted">
                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                </small>

                @error('gambar')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="ti ti-device-floppy me-1"></i>
                Simpan
            </button>

            <a href="{{ route('admin.ekstrakulikuler') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection