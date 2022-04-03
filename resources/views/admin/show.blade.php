@extends('layouts.main')
@section('container')
    <div class="card">
        
        <div class="row my-3 justify-content-center">
            <div class="col-lg-8">
                <h2>Detail Pengaduan dari <span class="text-primary">{{ $pengaduan->nama }}</span></h2>
                <div class="d-flex my-3">
                    <a href="/admin" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all pengaduan</a><br>
                    <a href="/admin/cetak/{{ $pengaduan->id }}"class="btn btn-secondary mx-3"><i class="bi bi-printer"></i> Cetak</a>
                </div>
                
                @if ($pengaduan->image)
                    <div style="max-height: 500px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $pengaduan->image) }}" class="img-fluid mt-3 rounded img-thumbnail">
                    </div>
                @else
                    <div class="card text-center mt-3 p-3">
                        <i class="bi bi-x-circle"></i> No Picture Added 
                    </div>    
                @endif
    
                <div style="font-size: 1.25rem;">
                    <table class="my-5">
                        <tr class="text-danger">
                            <th>Status</th>
                            <td class="px-3">:</td>
                            <td class="text-uppercase fw-bold">{{ $pengaduan->status }}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td class="px-3">:</td>
                            <td>{{ $pengaduan->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td class="px-3">:</td>
                            <td>{{ $pengaduan->nama }}</td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td class="px-3">:</td>
                            <td>{{ $pengaduan->telp }}</td>
                        </tr>
                        <tr>
                            <th>Isi</th>
                            <td class="px-3">:</td>
                            <td style="text-align: justify;">{{ $pengaduan->isi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection