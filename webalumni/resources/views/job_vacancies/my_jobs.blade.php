@extends('layout.app')

@section('title', 'Lowongan Saya')

@section('content')
<div class="container py-4">

    {{-- Header --}}
    <div class="row mb-4 job-header align-items-center">
        <div class="col-md-8">
            <h2 class="mb-1">📋 Lowongan Pekerjaan Saya</h2>
            <p class="text-muted mb-0">Kelola semua lowongan yang Anda posting</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('jobs.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Lowongan
            </a>
        </div>
    </div>

    {{-- Alert Messages --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="bi bi-exclamation-triangle"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Statistics Cards --}}
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card stat-card text-center">
                <div class="card-body">
                    <h3 class="text-primary mb-0">{{ $stats['total'] }}</h3>
                    <p class="text-muted mb-0">Total Lowongan</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card stat-card text-center">
                <div class="card-body">
                    <h3 class="text-warning mb-0">{{ $stats['pending'] }}</h3>
                    <p class="text-muted mb-0">Menunggu Review</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card stat-card text-center">
                <div class="card-body">
                    <h3 class="text-success mb-0">{{ $stats['approved'] }}</h3>
                    <p class="text-muted mb-0">Disetujui</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card stat-card text-center">
                <div class="card-body">
                    <h3 class="text-danger mb-0">{{ $stats['rejected'] }}</h3>
                    <p class="text-muted mb-0">Ditolak</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Filter Tabs --}}
    <ul class="nav nav-tabs mb-4 job-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#all">
                Semua <span class="badge bg-secondary">{{ $stats['total'] }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#pending">
                Pending <span class="badge bg-warning">{{ $stats['pending'] }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#approved">
                Disetujui <span class="badge bg-success">{{ $stats['approved'] }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#rejected">
                Ditolak <span class="badge bg-danger">{{ $stats['rejected'] }}</span>
            </a>
        </li>
    </ul>

    {{-- Tab Content --}}
    <div class="tab-content">
        <div class="tab-pane fade show active" id="all">
            @include('job_vacancies.partials.job_list', ['jobs' => $jobs])
        </div>

        <div class="tab-pane fade" id="pending">
            @include('job_vacancies.partials.job_list', ['jobs' => $jobs->where('status', 'pending')])
        </div>

        <div class="tab-pane fade" id="approved">
            @include('job_vacancies.partials.job_list', ['jobs' => $jobs->where('status', 'approved')])
        </div>

        <div class="tab-pane fade" id="rejected">
            @include('job_vacancies.partials.job_list', ['jobs' => $jobs->where('status', 'rejected')])
        </div>
    </div>

</div>
@endsection
