@extends('index')

@section('title', $title)

@section('content')

<div class="card">

    <div class="card-body">

        <h4 class="card-title">
            Tambah Siswa
        </h4>

        <h6 class="card-subtitle mb-4 text-muted">
            Tambahkan data siswa SMA Negeri 24 Bandung
        </h6>

        <form action="{{ route('admin.siswa.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    NISN
                </label>

                <input
                    type="text"
                    name="nisn"
                    class="form-control"
                    value="{{ old('nisn') }}"
                    placeholder="Masukkan NISN"
                    required
                >

                @error('nisn')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Nama Siswa
                </label>

                <input
                    type="text"
                    name="nama_siswa"
                    class="form-control"
                    value="{{ old('nama_siswa') }}"
                    placeholder="Masukkan nama siswa"
                    required
                >

                @error('nama_siswa')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="mb-3">

                <label class="form-label">
                    Jenis Kelamin
                </label>

                <select
                    name="jenis_kelamin"
                    class="form-select"
                    required
                >

                    <option value="">
                        -- Pilih Jenis Kelamin --
                    </option>

                    <option value="Laki-Laki"
                        {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>
                        Laki-Laki
                    </option>

                    <option value="Perempuan"
                        {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>

                @error('jenis_kelamin')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Tahun Masuk
                </label>

                <input
                    type="number"
                    name="tahun_masuk"
                    class="form-control"
                    value="{{ old('tahun_masuk') }}"
                    placeholder="Contoh: 2026"
                    required
                >

                @error('tahun_masuk')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <button
                type="submit"
                class="btn btn-primary"
            >

                <i class="ti ti-device-floppy me-1"></i>
                Simpan

            </button>

            <a
                href="{{ route('admin.siswa') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection