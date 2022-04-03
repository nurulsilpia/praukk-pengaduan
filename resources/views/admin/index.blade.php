@extends('layouts.main')
@section('container')
    <h3 class="mb-3">Daftar Laporan Pengaduan Masyarakat</h3>

    <table class="rounded table table-hover shadow-sm pt-3" id="tableAll">
      <thead class="bg-secondary">
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Pengaduan</th>
          <th>Status</th>
          <th>Action</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($pengaduans as $pengaduan)
          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $pengaduan->nik }}</td>
              <td>{{ $pengaduan->nama }}</td>
              <td>{{ $pengaduan->telp }}</td>
              <td>{{ $pengaduan->isi }}</td>
              <td class="text-uppercase fw-bold">{{ $pengaduan->status }}</td>
              <td>
                <a href="/admin/{{ $pengaduan->id }}" class="btn btn-primary btn-sm"><i class='bx bx-show'></i> Detail</a>
              </td>
              <td>
                <a href="/admin/cetak/{{ $pengaduan->id }}"class="btn btn-secondary btn-sm"><i class="bi bi-printer"></i> Cetak</a>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection