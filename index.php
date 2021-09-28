<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: #326bfa;">
    <div class="container">
    <h1 class="d-flex justify-content-center mb-5">Selamat Datang Di Sistem Informasi Akademik</h1>
    <form action="menampilkan-data-mahasiswa.php" method="POST">
      <div class="row">
  <div class="col mb-3 ">
    <label for="nim" class="form-label">Nim</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="masukkan nim">
  </div>
    <div class="col mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama">
  </div>
</div>
<div class="row">
    <div class=" col mb-3">
    <label for="kd_matkul" class="form-label">Kode Mata Kuliah</label>
    <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" placeholder="masukkan kode mata Kuliah">
  </div>
    <div class=" col mb-3">
    <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
    <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="masukkan nama mata Kuliah">
  </div>
</div>
<div class="row">
    <div class="col mb-3">
    <label for="sks" class="form-label">SKS</label>
    <input type="text" class="form-control" id="sks" name="sks" placeholder="masukkan jumlah sks">
  </div>
  <select class="col form-select-sm m-4 mb-3" name="kelas" aria-label="Default select example">
  <option selected>Kelas</option>
  <option value="1">A</option>
  <option value="2">B</option>
  </select>
    <select class="col form-select-sm m-4 mb-3" name="semester" aria-label="Default select example">
  <option selected>Semester</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  </select>
</div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
    </div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  </body>
</html>