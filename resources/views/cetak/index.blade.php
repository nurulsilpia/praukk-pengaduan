<!DOCTYPE html>
<html>
        <head>
            <title>Download Data Pengaduan</title>
        </head>
        <body>
            <style type="text/css">
                body{
                font-family: sans-serif;
                }
                table{
                margin: 20px auto;
                border-collapse: collapse;
                }
                table th,
                table td{
                border: 0.25px solid #3c3c3c;
                padding: 3px 8px;
                }
                a{
                background: blue;
                color: #fff;
                padding: 8px 10px;
                text-decoration: none;
                border-radius: 2px;
                }
                .tengah{
                    text-align: center;
                }
                .isi {
                    text-align: justify;
                }
                .img {
                    height: 300px; 
                    object-fit: cover;
                    text-align: center;
                }
            </style>
    <table>
        <h2 class="tengah">Data Pengaduan</h2>
            @if ($pengaduan->image)
                <center>
                    <img src="{{ asset('storage/' . $pengaduan->image) }}" class="img">
                </center>
            @endif
            <tr>
                <td>NIK</td>
                <td>{{$pengaduan->nik}}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>{{$pengaduan->nama}}</td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>{{$pengaduan->telp}}</td>
            </tr>
            <tr>
                <td>Pengaduan</td>
                <td class="isi">{{$pengaduan->isi}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$pengaduan->status}}</td>
            </tr>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>
