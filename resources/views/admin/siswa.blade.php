@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h4 class="card-title mb-1">
                    Daftar Siswa
                </h4>

                <h6 class="card-subtitle text-muted">
                    Data siswa SMA Negeri 24 Bandung
                </h6>
            </div>

            <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i>
                Tambah Siswa
            </a>

        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="table-responsive">
            <table class="table align-middle">

                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tahun Masuk</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($siswa as $item)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $item->nisn }}
                            </td>
                            <td>
                                {{ $item->nama_siswa }}
                            </td>
                            <td>
                                {{ $item->jenis_kelamin }}
                            </td>

                            <td>
                                {{ $item->tahun_masuk }}
                            </td>


                            <td class="text-center">

                                <a href="{{ route('siswa.siswa-edit', ['id_siswa' => $item->id_siswa]) }}" class="btn btn-warning btn-sm">

                                    <i class="ti ti-edit"></i>
                                    Edit

                                </a>

                                <form
                                    action="{{ route('siswa.destroy', ['id_siswa' => $item->id_siswa]) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data siswa ini?')"
                                    >

                                        <i class="ti ti-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data siswa.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection