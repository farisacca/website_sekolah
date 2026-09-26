@extends('index')

@section('title', $title)

@section('content')

<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>
                <h4 class="card-title mb-1">
                    Daftar Guru
                </h4>

                <h6 class="card-subtitle text-muted">
                    Data guru SMA Negeri 24 Bandung
                </h6>
            </div>

            <a href="{{ route('admin.guru.create') }}"
               class="btn btn-primary">

                <i class="ti ti-plus me-1"></i>
                Tambah Guru

            </a>

        </div>


        {{-- Pesan berhasil --}}
        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        {{-- Pesan error --}}
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
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($guru as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $item->nama_guru }}
                            </td>

                            <td>
                                {{ $item->nip }}
                            </td>

                            <td>
                                {{ $item->mapel }}
                            </td>

                            <td class="text-center">

                                @if($item->foto)

                                    <img
                                        src="{{ asset('images/guru/' . $item->foto) }}"
                                        width="50"
                                        height="50"
                                        class="rounded-circle"
                                        style="object-fit: cover;"
                                    >

                                @else

                                    <span class="text-muted">
                                        Tidak ada foto
                                    </span>

                                @endif

                            </td>

                            <td class="text-center">

                                {{-- EDIT --}}
                                <a href="{{ route('admin.guru.edit', ['id_guru' => $item->id_guru]) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="ti ti-edit"></i>
                                    Edit

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('admin.guru.destroy', ['id_guru' => $item->id_guru]) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data guru ini?')"
                                    >

                                        <i class="ti ti-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                class="text-center py-4">

                                Belum ada data guru.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
</div>

@endsection