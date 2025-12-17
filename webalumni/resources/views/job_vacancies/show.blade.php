@extends('layout.app')

@section('content')
<div class="container py-4">

    {{-- Header --}}
    <div class="mb-4 job-header">
        <h2 class="fw-bold mb-1">{{ $job->title }}</h2>
        <p class="text-muted mb-0">
            <i class="bi bi-building"></i> {{ $job->company_name ?? '-' }}
            &nbsp;•&nbsp;
            <i class="bi bi-geo-alt"></i> {{ $job->location ?? '-' }}
        </p>
    </div>

    <div class="row g-4">
        {{-- Main Content --}}
        <div class="col-lg-8">
            <div class="card job-card">
                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">
                        <span class="badge bg-info text-dark">
                            {{ strtoupper($job->type) }}
                        </span>

                        @if($job->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-warning text-dark">Menunggu Persetujuan</span>
                        @endif
                    </div>

                    <h5 class="fw-semibold mb-2">Deskripsi Pekerjaan</h5>
                    <div class="job-description">
                        {!! nl2br(e($job->description)) !!}
                    </div>

                    @if($job->application_url)
                        <hr>
                        <p class="mb-0">
                            <strong>Link Lamaran:</strong>
                            <a href="{{ $job->application_url }}" target="_blank" class="text-primary">
                                {{ $job->application_url }}
                            </a>
                        </p>
                    @endif

                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            <div class="card job-card sticky-top" style="top: 90px;">
                <div class="card-body">

                    <h6 class="fw-bold mb-3">Informasi Singkat</h6>

                    <ul class="list-unstyled small">
                        <li class="mb-2">
                            <i class="bi bi-briefcase"></i>
                            <strong>Tipe:</strong> {{ strtoupper($job->type) }}
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-geo-alt"></i>
                            <strong>Lokasi:</strong> {{ $job->location ?? '-' }}
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-building"></i>
                            <strong>Perusahaan:</strong> {{ $job->company_name ?? '-' }}
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-clock"></i>
                            <strong>Status:</strong>
                            @if($job->is_active)
                                Aktif
                            @else
                                Menunggu Persetujuan
                            @endif
                        </li>
                    </ul>

                    <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary w-100 mt-3">
                        <i class="bi bi-arrow-left"></i> Kembali ke Lowongan
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
