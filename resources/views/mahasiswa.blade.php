<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/mahasiswa"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Logo-UIN-SU-Medan-PNG-1.png" alt="" style="width: 75px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" placeholder="Cari..."/>
              <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container my-4"><h1>Halaman Mahasiswa</h1></div>

    <div class="container">
        <div class="row">
          <div class="col-8">
              <h3>Data Mahasiswa</h2>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
          </div>
          <div class="col">
            <h3>Form Tambah Mahasiswa</h2>
                <form action="">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control mb-4" id="nim" placeholder="12345678">

                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nasrullah Gunawan">

                    <div class="d-grid mt-4">
                        <button id="simpan" class="btn btn-primary">Simpan Mahasiswa</button>
                    </div>
                </form>
                <div id="alert-success" class="alert alert-success d-none mt-4">
                  Data mahasiswa ditambahkan
                </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <script>
        $(document).ready(function () {
          let no=1;

          $("#simpan").click(function (event) {
            event.preventDefault(); 
      
            const nim = $("#nim").val();
            const nama = $("#nama").val();
      
            if (nim === "" || nama === "") {
              alert("Form tidak boleh kosong");
              return;
            }
      
            $("table tbody").append
            (`<tr>
                <td>${no}</td>
                <td>${nim}</td>
                <td>${nama}</td>
              </tr>`);
    
            no++;
            $("#alert-success").removeClass("d-none");

            setTimeout(() => { $("#alert-success").addClass("d-none"); }, 2000);
            
            $("#nim").val("");
            $("#nama").val("");
          });
        });
      </script>


</body>
</html>