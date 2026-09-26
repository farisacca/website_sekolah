@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h4 class="card-title mb-1">
                    Daftar Ekstrakurikuler
                </h4>

                <h6 class="card-subtitle text-muted">
                    Data ekstrakurikuler SMA Negeri 24 Bandung
                </h6>
            </div>

            <a href="{{ route('admin.ekstrakulikuler.create') }}"
               class="btn btn-primary">

                <i class="ti ti-plus me-1"></i>
                Tambah Ekstrakurikuler

            </a>

        </div>

        {{-- Alert --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Card Eskul --}}
        <div class="row">

            @forelse($eskul as $item)

                <div class="col-md-6 col-xl-4 mb-4">

                    <div class="card border h-100">

                        {{-- Gambar / Icon --}}
                        <div class="p-3 pb-0">

                            @if($item->gambar)

                                <img
                                    src="{{ asset('images/eskul/' . $item->gambar) }}"
                                    class="rounded w-100"
                                    style="height: 180px; object-fit: cover;"
                                    alt="{{ $item->nama_eskul }}"
                                >

                            @else

                                <div
                                    class="d-flex align-items-center justify-content-center rounded bg-light"
                                    style="height: 180px;"
                                >
                                    <i class="ti ti-trophy"
                                       style="font-size: 55px;">
                                    </i>
                                </div>

                            @endif

                        </div>

                        {{-- Isi --}}
                        <div class="card-body">

                            <h5 class="card-title mb-3">
                                {{ $item->nama_eskul }}
                            </h5>

                            <div class="mb-3 text-muted">

                                <i class="ti ti-clock me-1"></i>

                                {{ $item->jadwal_latihan }}

                            </div>

                            <p class="card-text">
                                {{ $item->deskripsi }}
                            </p>

                            <hr>

                            <p class="mb-3">

                                <span class="text-muted">
                                    Pembina:
                                </span>

                                <strong>
                                    {{ $item->pembina }}
                                </strong>

                            </p>

                            {{-- Tombol --}}
                            <div>

                                <a
                                    href="{{ route('admin.ekstrakulikuler.edit', $item->id_eskul) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    <i class="ti ti-edit"></i>
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.ekstrakulikuler.destroy', $item->id_eskul) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    >
                                        <i class="ti ti-trash"></i>
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center py-5">

                    <p class="text-muted mb-0">
                        Belum ada data ekstrakurikuler.
                    </p>

                </div>

            @endforelse

        </div>

    </div>
</div>

@endsection