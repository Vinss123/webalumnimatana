@extends('layout.app')

@section('content')
<div class="container py-4">

    {{-- Header --}}
    <div class="mb-4">
        <h3 class="fw-bold">➕ Tambah Lowongan Pekerjaan</h3>
        <p class="text-muted">Isi informasi lowongan dengan lengkap dan jelas</p>
    </div>

    {{-- Error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Form Card --}}
    <div class="card form-card">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('jobs.store') }}">
                @csrf

                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="form-label">Judul Lowongan</label>
                        <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" name="perusahaan" class="form-control" value="{{ old('perusahaan') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tipe Pekerjaan</label>
                        <select name="tipe_pekerjaan" class="form-select" required>
                            <option value="">Pilih Tipe</option>
                            <option value="full_time" {{ old('tipe_pekerjaan')=='full_time'?'selected':'' }}>Full Time</option>
                            <option value="part_time" {{ old('tipe_pekerjaan')=='part_time'?'selected':'' }}>Part Time</option>
                            <option value="internship" {{ old('tipe_pekerjaan')=='internship'?'selected':'' }}>Internship</option>
                            <option value="contract" {{ old('tipe_pekerjaan')=='contract'?'selected':'' }}>Contract</option>
                            <option value="freelance" {{ old('tipe_pekerjaan')=='freelance'?'selected':'' }}>Freelance</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Deskripsi Pekerjaan</label>
                        <textarea name="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Persyaratan (opsional)</label>
                        <textarea name="persyaratan" class="form-control" rows="3">{{ old('persyaratan') }}</textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gaji Minimum (opsional)</label>
                        <input type="number" name="gaji_min" class="form-control" value="{{ old('gaji_min') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gaji Maksimum (opsional)</label>
                        <input type="number" name="gaji_max" class="form-control" value="{{ old('gaji_max') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Kontak Email</label>
                        <input type="email" name="kontak_email" class="form-control" value="{{ old('kontak_email') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Kontak Telepon (opsional)</label>
                        <input type="text" name="kontak_phone" class="form-control" value="{{ old('kontak_phone') }}">
                    </div>

                </div>

                {{-- Action --}}
                <div class="d-flex gap-3 mt-4">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>
                    <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary px-4">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
