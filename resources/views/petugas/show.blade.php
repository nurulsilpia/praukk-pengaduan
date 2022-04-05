@extends('layouts.main')
@section('container')
<div class="container mb-5" style="margin-top: 100px;">
    <div class="card">
        <div class="row my-3 justify-content-center">
            <div class="col-lg-8">
                <h2>Detail Pengaduan dari <span class="text-primary">{{ $pengaduan->nama }}</span></h2>
                
                {{-- Action --}}
                <div class="d-flex my-3">
                    <a href="/petugas" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all pengaduan</a><br>
                    <button class="btn btn-warning mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Edit Status</button>
                    <form action="/petugas/{{ $pengaduan->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
                
                @if ($pengaduan->image)
                    <div style="max-height: 400px; overflow: scroll;">
                        <img src="{{ asset('storage/' . $pengaduan->image) }}" class="img-fluid mt-3 rounded img-thumbnail">
                    </div>
                @else
                    <div class="card text-center mt-3 p-3">
                        <i class="bi bi-x-circle"></i> No Picture Added 
                    </div>    
                @endif
    
                <div style="font-size: 1.25rem;">
                    <table class="my-5">
                        
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
                            <td>{{ $pengaduan->isi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update Status-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $pengaduan->nama }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/petugas/{{ $pengaduan->id }}" method="post" class="d-inline">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="status" class="form-label">Edit Status</label>
                        <select class="form-select" name="status" class="status" id="status">
                            <option selected disabled>Select Status</option>
                            <option value="draft" <?php if($pengaduan->status == 'draft'){ echo 'selected';}?>>draft</option>
                            <option value="process" <?php if($pengaduan->status == 'process'){ echo 'selected';}?>>process</option>
                            <option value="done" <?php if($pengaduan->status == 'done'){ echo 'selected';}?>>done</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection