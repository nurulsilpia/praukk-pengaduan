<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- Datatables CSS CDN Link -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/asset/css/style.css">

    <title>Pengaduan Masyarakat</title>
  </head>
  <body>
    @include('partials.navbar')

    <div class="container mb-5" style="margin-top: 100px;">
        @yield('container')
    </div>

    <footer class="bg-white d-flex flex-wrap justify-content-between align-items-center px-3 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          {{-- <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg> --}}
        </a>
        <span class="text-muted">&copy; 2022 Piarus, All Right Reserved</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3 fs-2"><a class="text-dark" target="_blank" href="https://github.com/nurulsilpia"><i class='bx bxl-github'></i></a></li>
        <li class="ms-3 fs-2"><a class="text-dark" target="_blank" href="https://instagram.com/nurulsilpia"><i class='bx bxl-instagram-alt' ></i></a></li>
        <li class="ms-3 fs-2"><a class="text-dark" target="_blank" href="https://www.linkedin.com/in/nurul-silpia-3107/"><i class='bx bxl-linkedin-square' ></i></a></li>
      </ul>
    </footer>

    <!-- Datatables CDN JS -->
   <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      // Data Table
      $(document).ready(function() {
            $('#tableAll').DataTable();
      } );
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <script src="/asset/js/script.js"></script>
  </body>
</html>