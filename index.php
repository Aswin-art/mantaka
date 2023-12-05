<!doctype html>
<html lang="en" class="h-100 w-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mantaka - Home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- My Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary shadow-sm">
      <div class="container">
        <div class="d-flex justify-content-center align-items-center w-100">
          <a class="navbar-brand fw-bold fs-1 text-main-color" href="/">Mantaka</a>
        </div>
      </div>
    </nav>

    <!-- Button Action -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPeminjamModal">
            Tambah Peminjam
          </button>
          <button class=" ms-3 btn btn-danger">
            <a href="/login.php" class="d-block navbar-brand">Keluar Aplikasi</a>
          </button>
        </div>
      </div>
    </div>

    <!-- Button Modal -->
    <div class="modal fade" id="createPeminjamModal" tabindex="-1" aria-labelledby="createPeminjamModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="createPeminjamModalLabel">Data Peminjam</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form>
            <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Nama Peminjam</label>
                  <select class="form-select" name="id_anggota" aria-label="Default select example">
                    <option selected disabled>Pilih Anggota</option>
                    <option value="1">Aswin Arung Ilmi</option>
                    <option value="2">Flores Wahyu Ningsih</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Buku Yang Dipinjam</label>
                  <select class="form-select" name="id_buku" aria-label="Default select example">
                    <option selected disabled>Pilih Buku</option>
                    <option value="1">The Lores From Western</option>
                    <option value="2">The Forest Kingdom</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tgl_peminjaman" class="form-label me-3">Tanggal Peminjaman</label>
                  <input type="date" name="tgl_peminjaman" id="tgl_peminjaman">
                </div>
                <div class="mb-3">
                  <label for="tgl_pengembalian" class="form-label me-3">Tanggal Pengembalian</label>
                  <input type="date" name="tgl_pengembalian" id="tgl_pengembalian">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Books -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="fw-bold">Daftar Buku</h3>
        </div>
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Cover Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Status Buku</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="w-25">
                  <img src="./assets/images/login_image.png" alt="image" class="w-100 h-50 rounded" style="object-fit: cover; background-size: cover;">
                </td>
                <td>The Lores From Western</td>
                <td>Antonio Sebastian</td>
                <td>2018</td>
                <td>
                  <span class="badge bg-main-color">Tersedia</span>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="w-25">
                  <img src="./assets/images/login_image.png" alt="image" class="w-100 h-50 rounded" style="object-fit: cover; background-size: cover;">
                </td>
                <td>The Forest Kingdom</td>
                <td>Emilia Laplace</td>
                <td>2010</td>
                <td>
                  <span class="badge bg-danger">Tidak Tersedia</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Users -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="fw-bold">Daftar Anggota</h3>
        </div>
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telp</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Aswin Arung Ilmi</td>
                <td>aswin@example.com</td>
                <td>01234567891</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Flores Wahyu Ningsih</td>
                <td>flores@example.com</td>
                <td>01234567891</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Rents -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="fw-bold">Daftar Peminjaman</h3>
        </div>
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Buku Dipinjam</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Aswin Arung Ilmi</td>
                <td>The Forest Kingdom</td>
                <td>05 Desember, 2023</td>
                <td>23 Januari, 2024</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>