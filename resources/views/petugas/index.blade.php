@extends('layouts.main')
@section('container')
    <h3 class="mb-3">Daftar Laporan Pengaduan Masyarakat</h3>

    {{-- <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nama</h5>
          <h6 class="card-subtitle mb-2 text-muted">Repoted at 20 March 2022</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div> --}}
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
@endsection