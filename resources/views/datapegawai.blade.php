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
        <a href="/tambahpegawai" class="btn btn-success">+ Tambah</a>
        @if ($massage = Session::get('success'))
          <div class="alert alert-success mb-2 mt-2" role="alert">
            {{ $massage }}
          </div>
        @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No HP</th>
                <th scope="col">Di Buat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $no = 1;
                ?>
              <tr>
                @foreach ($data as $row)
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
                <td>0{{ $row->notelp }}</td>
                <td>{{ $row->created_at->format('D M Y') }}</td>
                <td>
                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Ubah</a>
                  <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                </td> 
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>