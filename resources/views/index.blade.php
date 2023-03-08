<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tabel Buku</title>
  </head>
  <body style="background-color:rgb(65, 65, 65);">
    <div class="card" style="width: 70rem;">
        <div class="card-body" >
            <h1>Tabel Buku</h1>
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Series Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($buku as $no => $buku)
                <tr>
                    <th>{{ $no + 1}}</th>
                    <td>{{ $buku->judul_buku}}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->status }}</td>
                    <td><a class="btn btn-outline-warning" href="lah" role="button">Ubah</a>
                    <a class="btn btn-outline-danger" href="#" role="button">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
                <td><a class="btn btn-primary" href="lah" role="button">Tambahkan Buku</a></td> 
              </table>
        </div>

      </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>