<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Pegawai</h1>
    <div class="container">
        <a href="/tambahpegawai" type="button" class="btn btn-success">+ Tambah</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No HP</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{ $row->id }}</th>
              <td>{{ $row->name }}</td>
              <td>{{ $row->jenis_kelamin }}</td>
              <td>0{{ $row->notelp }}</td>
              <td>
            <button type="button" class="btn btn-info">Ubah</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </td> 
            @endforeach
            </tr>
          </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>