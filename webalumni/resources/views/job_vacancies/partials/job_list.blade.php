@if($jobs->count() > 0)
<div class="table-responsive">
    <table class="table table-hover align-middle job-table">
        <thead>
            <tr>
                <th style="width:5%">#</th>
                <th style="width:30%">Judul Lowongan</th>
                <th style="width:15%">Perusahaan</th>
                <th style="width:10%">Lokasi</th>
                <th style="width:10%">Tipe</th>
                <th style="width:10%">Status</th>
                <th style="width:10%">Tanggal</th>
                <th style="width:10%" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $index => $job)
            <tr>
                <td class="text-muted">{{ $index + 1 }}</td>

                <td>
                    <strong>{{ $job->judul }}</strong>

                    @if($job->status === 'rejected' && $job->rejection_note)
                        <div class="text-danger small mt-1">
                            <i class="bi bi-exclamation-circle"></i>
                            {{ $job->rejection_note }}
                        </div>
                    @endif
                </td>

                <td>{{ $job->perusahaan }}</td>
                <td>{{ $job->lokasi }}</td>

                <td>
                    <span class="badge badge-type">
                        {{ $job->tipe_pekerjaan_label }}
                    </span>
                </td>

                <td>{!! $job->status_badge !!}</td>

                <td class="small text-muted">
                    {{ $job->created_at->format('d M Y') }} <br>
                    {{ $job->time_ago }}
                </td>

                <td class="text-center">
                    <div class="btn-group btn-group-sm">

                        {{-- View --}}
                        @if($job->status === 'approved')
                            <a href="{{ route('jobs.show', $job->id) }}"
                               class="btn btn-outline-primary"
                               title="Lihat Detail">
                                <i class="bi bi-eye"></i>
                            </a>
                        @endif

                        {{-- Edit --}}
                        <a href="{{ route('jobs.edit', $job->id) }}"
                           class="btn btn-outline-warning"
                           title="Edit">
                            <i class="bi bi-pencil"></i>
                        </a>

                        {{-- Delete --}}
                        <form method="POST"
                              action="{{ route('jobs.destroy', $job->id) }}"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus lowongan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-outline-danger"
                                    title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@else
<div class="text-center py-5 empty-state">
    <i class="bi bi-inbox"></i>
    <h5 class="mt-3">Belum Ada Lowongan</h5>
    <p class="text-muted">
        Anda belum memposting lowongan pekerjaan dengan status ini.
    </p>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary mt-3">
        <i class="bi bi-plus-circle"></i> Tambah Lowongan Baru
    </a>
</div>
@endif
