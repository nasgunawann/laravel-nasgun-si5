<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/mahasiswa"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Logo-UIN-SU-Medan-PNG-1.png" alt="" style="width: 75px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
            </ul>
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </nav>

      <div class="offcanvas offcanvas-end" id="offcanvasExample">
        <div class="offcanvas-header">
          <h5>UTS Laravel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/">Produk</a>
        </li>
          </ul>
          <div>
        <form class="d-flex gap-2">
          <input class="form-control" type="search" placeholder="Search">
          <button class="btn btn-outline-success">Search</button>
        </form>
          </div>
        </div>
      </div>
      
    <div class="container my-4">
        <h1>Form Tambah Produk</h1>
    </div>

    <div class="container mt-4">
      <form>
        <div class="row">
          <div class="col-4">
            <label class="form-label">Kode Produk</label>
            <input type="text" placeholder="Input Kode Produk" class="form-control">
          </div>
          <div class="col-4">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Input Nama Produk">
          </div>
          <div class="col-4">
            <label class="form-label">Jenis Produk</label>
            <select class="form-select">
              <option disabled selected>Pilih Produk</option>
              @for ($i = 0; $i < count($jenis_produk); $i++)
              <option value="{{ strtolower($jenis_produk[$i]) }}">{{ $jenis_produk[$i] }}</option>
            @endfor
            </select>
          </div>
          <div class="col-8">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" placeholder="Input Harga">
          </div>
          <div class="col-4 d-grid align-self-end">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>