<?php
include 'Login/koneksi.php';
?>

<html>

<head>
  <title>Edit | profil</title>
</head>

<body>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?page=">Home</a></li>
            <li class="breadcrumb-item active">Edit Profil</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <?php
    $id = $_GET['?nik'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    ?>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Profil Anda</h3>
      </div>
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="nik" value="<?php echo $fetch['nik']; ?>" />

          <table border="0">
            <tr>
              <td rowspan="5" width="200px"><img src="img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>" width="180px" height="180px"></td>
              <td>Nama</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td><input type="text" name="nama_dev" value="<?php echo $fetch['nama_dev']; ?>"></td>
              <td width="30px"></td>
              <td><input type="submit" value="Simpan" name="kirim" class="btn btn-info btn-sm"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td><input type="text" name="alamat_dev" value="<?php echo $fetch['alamat_dev']; ?>"></td>
            </tr>
            <tr>
              <td>No Telepon</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td><input type="text" name="no_dev" value="<?php echo $fetch['no_dev']; ?>"></td>
            </tr>
            <tr>
              <td>Username</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td><input type="text" name="username_dev" value="<?php echo $fetch['username_dev']; ?>"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td><input type="password" name="password_dev" value="<?php echo $fetch['password_dev']; ?>"></td>
            </tr>
            <tr>
              <td colspan="6" height="70"> <input type="file" name="foto_profil"></td>
            </tr>
          </table>
        </form>

        <?php
        if (isset($_POST['kirim'])) {
          $nik = $_POST['nik'];
          $nama_dev = $_POST['nama_dev'];
          $alamat_dev = $_POST['alamat_dev'];
          $no_dev = $_POST['no_dev'];
          $username_dev = $_POST['username_dev'];
          $password_dev = $_POST['password_dev'];

          // Upload Foto profile Developer
          $nama_file = $_FILES['foto_profil']['name'];
          $source = $_FILES['foto_profil']['tmp_name'];
          $folder = 'img/data_developer/foto_profil/';


          // Query untuk memasukan data ke Database
          if ($nama_file != '') {
            move_uploaded_file($source, $folder . $nama_file);
            $update = mysqli_query($koneksi, "UPDATE tabel_developer SET nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_profil_dev='$nama_file', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
            if ($update) {
              echo 'Data Berhasil di Simpan';
              echo "<meta http-equiv='refresh' content='0'>";
            } else {
              echo 'Data Gagal di Simpan';
            }
          } else {
            $update = mysqli_query($koneksi, "UPDATE tabel_developer SET nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");
            if ($update) {
              echo 'Data Berhasil di Simpan 2';
              echo "<meta http-equiv='refresh' content='0'>";
            } else {
              echo 'Data Gagal di Simpan';
            }
          }
        }
        ?>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>

</body>

</html>