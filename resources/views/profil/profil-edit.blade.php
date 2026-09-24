@extends('index')

@section('title', $title)

@section('content')
    <div class="container">
            <div class="card card-primary card-outline mb-4">
                <h5 class="card-title">Edit Profil Sekolah</h5>
                <form action="{{ route('profil.update', $profilSekolah->id_profil) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $profilSekolah->nama_sekolah }}" placeholder="Nama
                            Sekolah" autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="npsn" class="form-label">NPSN</label>
                            <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $profilSekolah->npsn }}" placeholder="NPSN" autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="logo">Logo Sekolah</label>
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Profil</button>
                    </div>
                </form>
            </div>
        

@endsection