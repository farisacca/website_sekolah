@extends('index')

@section('title', $title)
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <div class="rounded circle bg-primary d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    :style="width: 96px; height: 96px; font-size: 2rem; aria-hidden: true;">
                    30
                </div>
                <ul class="list-group-flush text-start small">
                    <li class="list-group-item d-flex justify-content-between pt-0">
                        <span class="text-secondary">Nama Sekolah</span>
                        <span class="text-muted">{{ $profilSekolah->nama_sekolah }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-secondary">Kepala Sekolah</span>
                        <span class="text-muted">{{ $profilSekolah->kepala_sekolah }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-secondary">NPSN</span>
                        <span class="text-muted">{{ $profilSekolah->npsn }}</span>
                    </li>
                </ul>
                <a href="{{ route('profil.edit', $profilSekolah->id_profil) }}" class="btn btn-primary w-100 mt-3">
                    <i class="bi bi-pencil-square me-1"></i> 
                    Edit Profil Sekolah</a>
                </a>
            </div>
        </div>
    </div>


@endsection
