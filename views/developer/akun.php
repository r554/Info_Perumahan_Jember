<?php
include '../developer/session.php';
include 'Login/koneksi.php';
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
  <!-- Main content -->
  <section class="content">

    <?php

    $id = (int) $_SESSION['id'];

    $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    //var_dump($id);
    ?>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <table border="0">
          <tr>
            <td rowspan="5"><img src="img/<?php echo $fetch['foto_profil_dev']; ?>" width="180px" height="180px"></td>
            <td>Nama Developer</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['nama_dev']; ?></td>
            <td></td>
            <td></td>
            <td><a href="editprofil.php?nik=<?php echo $fetch['nik']; ?>"><input type="button" value="edit" class="btn btn-info"><a></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td>Alamat Developer</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $fetch['alamat_dev']; ?></td>
          </tr>
          <tr>
            <td>No Telphon</td>
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
            <td><?php echo $fetch['password_dev']; ?></td>

          </tr>
          <tr>
            <td>



            </td>
          </tr>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->


  <!-- /.content-wrapper -->