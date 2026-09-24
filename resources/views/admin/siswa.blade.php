@extends('index')

@section('title', $title)
@section('content')

<h3>Halaman siswa</h3>

<div class="card">
    <div class="card-body">

        {{-- Judul --}}
        <h4 class="card-title mb-4">
            Data Siswa
        </h4>

        {{-- Tabel --}}
        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th style="width: 8%;">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>

                        <th style="width: 18%;">
                            <h6 class="fw-semibold mb-0">NISN</h6>
                        </th>

                        <th style="width: 32%;">
                            <h6 class="fw-semibold mb-0">Nama Siswa</h6>
                        </th>

                        <th style="width: 22%;">
                            <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                        </th>

                        <th style="width: 20%;">
                            <h6 class="fw-semibold mb-0">Tahun Masuk</h6>
                        </th>
                        <th style="width: 18%;">
                            <h6 class="fw-semibold mb-0">Aksi</h6>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($siswa as $item)
                        <tr>
                            <td>
                                <p class="mb-0">
                                    {{ $loop->iteration }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0">
                                    {{ $item->nisn }}
                                </p>
                            </td>
                            <td>
                                <p class="fw-semibold mb-0">
                                    {{ $item->nama_siswa }}
                                </p>
                            </td>
                            <td>
                                @if ($item->jenis_kelamin == 'Laki-Laki')
                                    <span class="badge bg-primary rounded-pill px-3 py-2">
                                        Laki-Laki
                                    </span>
                                @else
                                    <span class="badge bg-info rounded-pill px-3 py-2">
                                        Perempuan
                                    </span>
                                @endif
                            </td>
                            <td>
                                <p class="mb-0 fw-semibold">
                                    {{ $item->tahun_masuk }}
                                </p>
                            </td>

                            <td>
        <div class="d-flex gap-2">

            <a href="{{ route('siswa.siswa-edit', $item->id_siswa) }}"
            class="btn btn-sm btn-primary">
                <i class="ti ti-edit"></i>
                Edit
            </a>

            <form action="{{ route('siswa.destroy', $item->id_siswa) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus data siswa ini?')">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="ti ti-trash"></i>
                    Hapus
                </button>

            </form>

        </div>
    </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <p class="mb-0 text-muted">
                                    Belum ada data siswa.
                                </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
    


