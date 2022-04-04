@extends('layouts.main')
@section('container')
<div class="container mb-5" style="margin-top: 100px;">
    <h3 class="mb-3">Daftar Laporan Pengaduan Masyarakat</h3>

    <table border="0.5" class="rounded table table-hover shadow-sm pt-3" id="tableAll">
        <thead class="bg-secondary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Pengaduan</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
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
                <td><a href="/petugas/{{ $pengaduan->id }}" class="btn btn-primary btn-sm"><i class='bx bx-show'></i> Detail</a></td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection