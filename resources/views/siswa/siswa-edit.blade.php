@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">
            Edit Data Siswa
        </h4>

        <form action="{{ route('admin.siswa.update', $siswa->id_siswa) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">
                    NISN
                </label>

                <input type="text" name="nisn" class="form-control" value="{{ old('nisn', $siswa->nisn) }}"
                maxlength="10" required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Nama Siswa
                </label>

                <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa', $siswa->nama_siswa) }}"
                    maxlength="40" required>
            </div>


            <div class="mb-3">
                <label class="form-label">
                    Jenis Kelamin
                </label>

                <select name="jenis_kelamin"
                        class="form-select"
                        required>

                    <option value="Laki-Laki"
                        {{ $siswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                        Laki-Laki
                    </option>

                    <option value="Perempuan"
                        {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Tahun Masuk
                </label>

                <input type="number" name="tahun_masuk" class="form-control"
                value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.siswa') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>
</div>

@endsection