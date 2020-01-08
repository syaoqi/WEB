<!DOCTYPE html>
  <html>
    <head>
    <title>Form Pendaftaran</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="styledaftar.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<header>
    <div class="main">
      <div class ="logo">
        <img src = "gambar/1.png">
        </div>
      <ul>  
      <li><a href ="index.php">HOME</li>
          </div>
<div class="container">
    <div class="jumbotron" >
   <h1>Masukkan Data Anda</h1>

      <div  class="col-sm-6">
        <p><form action="proses_tambah.php" method="POST"></p>
         
         <div class="row">
            <div class="col-sm-6">
              <label>No. Pendaftaran</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="no_pendaftaran" class="form-control" maxlength="10">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Nama</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Tempat Lahir</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="tempat_lahir" class="form-control">
            </div>
          </div>


             <div  class="row">
            <div class="col-sm-6">
              <label>Tanggal Lahir</label>
            </div>
            <div class="col-sm-6">
            <input type="date" name="tanggal_lahir" class="form-control">
            </div>
          </div>

          <div  class="row">
            <div class="col-sm-6">
              <label>Umur</label>
            </div>
             <div class="col-sm-6">
            <input type="number" name="umur" class="form-control">
            </div>
          </div>


          <div  class="row">
            <div class="col-sm-6">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" name="jenis_kelamin" value= "Laki-Laki"> Laki-Laki
               <input type="radio" name="jenis_kelamin" value= "Perempuan"> Perempuan
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control"></textarea>
            </div>
          </div>
         
          <div class="row">
            <div class="col-sm-6">
              <label>Asal Sekolah</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="asal_sekolah" class="form-control">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="Email" name="email" class="form-control">
            </div>
          </div>


    <div class="row" >
      <div class="col-sm-6">
     <button  type="submit" class="btn btn-primary btn-block">Tambahkan</button>
          </div>
            </div>
        </div>
    </form>
      </div>

</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>