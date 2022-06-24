<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan</title>
  <style>
    img{
      height: 100px;;
    }

    hr.solid {
    border-top: 2px solid #3B82F6;
    }
  </style>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="title text-center mb-5">
      <h2>Layanan Pengaduan Masyarakat Online</h2>
      <h5><a href="https://www.pengkat.madfariz.my.id/" target="_blank">www.pengkat.madfariz.my.id</a></h5>
    </div>
    <hr class="solid">

    <div>
      <h6>Laporan Pengaduan</h6>
      <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
    </div>
    <hr class="solid">
    
    <div class="mt-3 mb-3">
      <h6>Nama : {{ $pengaduan->name }}</h6>
      <h6>NIK : {{ $pengaduan->user_nik }}</h6>      
      <h6>No. Telepon : {{ $pengaduan->user->phone }}</h6>      
    </div>

    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">Laporan Pengaduan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <td>{{ $pengaduan->description }}</td>
        <td>{{ $pengaduan->status }}</td>
      </tbody>
    </table>
  </div>
</body>
</html>