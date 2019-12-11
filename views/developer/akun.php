<?php
include 'Login/session.php';
include 'Login/koneksi.php';
?>

<html>

<head>
  <title>Profil</title>
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
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- /.container-fluid -->

  <!-- Main content -->
  <section class="content">

    <?php

    $id = (int) $_SESSION['id'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    ?>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Profil Anda</h3>
      </div>
      <div class="card-body">
        <table border="0">
          <tr>
            <td rowspan="5" width="200px"><img src="img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>" width="180px" height="180px"></td>
            <td>Nama</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['nama_dev']; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="?page=edit_akun&?nik=<?php echo $fetch['nik'] ?>" class="btn btn-info btn-xs">
                <span class="fas fa-pen-square"> Edit</span>
              </a>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['alamat_dev']; ?></td>
          </tr>
          <tr>
            <td>No Telepon</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['no_dev']; ?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['username_dev']; ?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><input type="password" value="<?php echo $fetch['password_dev']; ?>" readonly disabled></td>
          </tr>

        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->

</body>

</html>