   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>UTS</title>
</head>
<body>
     <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Achmad</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="uts1.php">Prodak</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php">Log Out </a>
    </form>
  </div>
</nav> -->
    <!--content-->


  <div class="container">
    <div class="row" style="padding:20px;">
    <div class="col-md-12">
    <div class="card">
    <center><div class="card-header"><h2>Formulir</h2></div></center>
    <div class="card-body">
          <!--isi disini-->
          <form action="proses.php?aksi=tambah" method="post">
          <div class="form-group">
          <label>Nama :</label>
          <input type="text" name="nama" class="form-control" required></input><br>
          </div>
          <div class="form-group">
          <label>Alamat :</label>
          <textarea name="alamat" class="form-control" rows="5"></textarea>         
          </div>
          <div class="form-group">
          <label>Tanggal Lahir :</label>
          <input type="date" name="tgl_lahir" class="form-control" required></input><br>
          </div>
          <div class="form-group">
          <label for="">Jenis Kelamin :</label><br>
          <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
          </div>
          <label>Agama</label>
          <div class="form-group">
          <select name="agama" class="form-control">
          <option value="">pilih</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          </select> <br></<select>
          </div>
          <div class="form-group">
          <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          </div>
          
      
  </form>
 
 <!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->

    
</body>
</html>