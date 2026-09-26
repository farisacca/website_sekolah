@extends('index')

@section('title', $title)

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Guru</h4>
            <h6 class="card-subtitle">Data guru SMA Negeri 24 Bandung</h6>
            <a href="#" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i>
                Tambah Guru
            </a>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>#</th>
                                <th>Nama Guru</th>
                                <th>NIP</th>
                                <th>Mata Pelajaran</th>
                                <th>Foto</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                            <tbody class="border border-info">
                                @forelse ($guru as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_guru }}</td>
                                        <td>{{ $item->nip }}</td>
                                        <td>
                                            <span class="badge bg-light-info text-info">
                                                {{ $item->mapel }}</td>
                                            </span>
                                        <td>
                                        <td>
                                            @if ($item->foto)
                                            <img src="{{ asset('images/guru/' .$item->foto )}}" alt="{{ $item->nama_guru }}"
                                            width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">Tidak ada foto</span>                                                
                                            @endif
                                        </td>

                                        <td class="text-center">

                                            <a href="#" class="btn btn-light-primary me-1"
                                                title="Edit">
                                                <i class="ti ti-edit fs-5"></i>
                                            </a>

                                            <form action="#" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-light-danger btn-sm"
                                                title="Hapus">
                                                <i class="ti ti-transh fs-5"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Belum ada data guru
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection