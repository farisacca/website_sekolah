@extends('index')

@section('title', $title)

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            {{-- Logo Sekolah --}}
            <div class="text-center mb-4">

                <div
                    class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center"
                    style="width: 96px; height: 96px;"
                    aria-hidden="true"
                >

                    <img
                        src="{{ asset('images/profile/' . $profilSekolah->logo) }}"
                        alt="Logo Sekolah"
                        style="width: 100%; height: 100%; object-fit: contain;"
                    >

                </div>

            </div>


            {{-- Data Sekolah --}}
            <ul class="list-group list-group-flush">

                <li class="list-group-item d-flex justify-content-between">

                    <span class="text-secondary">
                        Nama Sekolah
                    </span>

                    <span class="text-muted">
                        {{ $profilSekolah->nama_sekolah }}
                    </span>

                </li>


                <li class="list-group-item d-flex justify-content-between">

                    <span class="text-secondary">
                        Kepala Sekolah
                    </span>

                    <span class="text-muted">
                        {{ $profilSekolah->kepala_sekolah }}
                    </span>

                </li>


                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">
                        NPSN
                    </span>
                    <span class="text-muted">
                        {{ $profilSekolah->npsn }}
                    </span>

                </li>

            </ul>
            <a
                href="{{ route('profil.edit', $profilSekolah->id_profil) }}"
                class="btn btn-primary w-100 mt-4"
            >

                <i class="bi bi-pencil-square me-1"></i>

                Edit Profil Sekolah

            </a>

        </div>

    </div>

</div>

@endsection