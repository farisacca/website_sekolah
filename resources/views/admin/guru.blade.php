@extends('index')

@section('title', $title)

@section('content')

<div class="row">
    <h3>Daftar Guru</h3>
    <br>
    @foreach ($guru as $item)

        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">

                {{-- FOTO --}}
                <div class="position-relative">
                    @if ($item->foto)
                        <img src="{{ asset('images/guru/' . $item->foto) }}"
                            class="card-img-top rounded-0"
                            alt="{{ $item->nama_guru }}"
                            style="height: 250px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/guru/default.jpg') }}"
                            class="card-img-top rounded-0"
                            alt="{{ $item->nama_guru }}"
                            style="height: 250px; object-fit: cover;">
                    @endif
                </div>

                {{-- DATA GURU --}}
                <div class="card-body pt-3 p-4">

                    {{-- NAMA --}}
                    <h6 class="fw-semibold fs-4 mb-2">
                        {{ $item->nama_guru }}
                    </h6>

                    {{-- NIP --}}
                    <p class="mb-2">
                        <span class="fw-semibold">NIP:</span>
                        {{ $item->nip }}
                    </p>

                    {{-- MAPEL --}}
                    <p class="mb-0 text-muted">
                        <span class="fw-semibold">Mapel:</span>
                        {{ $item->mapel }}
                    </p>

                </div>

            </div>
        </div>

    @endforeach
</div>

@endsection