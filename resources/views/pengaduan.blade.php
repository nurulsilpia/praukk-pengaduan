@extends('layouts.main')
@section('container')
    <div class="col-lg-8 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Pengaduan</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="POST" class="mb-5 card shadow-sm p-3" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nik" class="form-label">Nik</label>
              <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required autofocus value="{{ old('nik') }}">
              @error('nik')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No. Telepon</label>
                <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required autofocus value="{{ old('telp') }}">
                @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" required value="{{ old('isi') }}" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror 
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src =oFREvent.target.result;
            }
        }
        
    </script>
@endsection