<?php
include 'login/koneksi.php';
?>
<html>

<head>
  <title>Detail | Rumah</title>
  <link rel="stylesheet" href="../../assets/sb admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/sb admin/dist/css/adminlte.min.css">
</head>

<body>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Postingan IPJ</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">

    <?php
    include 'login/koneksi.php';
    $kd_data_rumah = $_GET['kd_data_rumah'];
    $data = mysqli_query($koneksi,"SELECT * from tabel_data_rumah where kd_data_rumah='$kd_data_rumah'");
	while($row = mysqli_fetch_array($data)){
    ?>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Data Rumah</h3>
      </div>
      <div class="card-body">
                    <table border="0" class="table table-hover" style="text-align:center">
                        <tr>
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>Foto 3</th>
                            <th>Foto 4</th>
                            <th>Foto 5</th>
                        </tr>
                        <tr>
                        <td><?php echo $row['foto_1']; ?></td>
                        <td><?php echo $row['foto_2']; ?></td>
                        <td><?php echo $row['foto_3']; ?></td>
                        <td><?php echo $row['foto_4']; ?></td>
                        <td><?php echo $row['foto_5']; ?></td>
                        </tr>
    </table>
    <table border="0" class="table table-hover" style="text-align:center">
    <tr>
            <td>Judul Postingan</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['judul_postingan']; ?></td>
          </tr>
          <tr>
            <td>Tipe Rumah</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['tipe_rumah']; ?></td>
          </tr>
          <tr>
            <td>Jumlah Unit Rumah</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['jumlah_unit_rumah']; ?></td>
          </tr>
          <tr>
            <td>Jumlah Kamar</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['jumlah_kamar']; ?></td>
          </tr>
          <tr>
            <td>Jumlah Kamar Mandi</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['jumlah_wc']; ?></td>
          </tr>
          <tr>
            <td>Luas Tanah</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['luas_tanah']; ?></td>
          </tr>
          <tr>
            <td>Luas Bangunan</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['luas_bangunan']; ?></td>
          </tr>
          <tr>
            <td>Sumber Air</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['sumber_air']; ?></td>
          </tr>
          <tr>
            <td>Daya Listrik</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['daya_listrik']; ?></td>
          </tr>
          <tr>
            <td>Pondasi</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['pondasi']; ?></td>
          </tr>
          <tr>
            <td>Dinding</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['dinding']; ?></td>
          </tr>
          <tr>
            <td>Daun Pintu</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['daun_pintu']; ?></td>
          </tr>
          <tr>
            <td>Kusen</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['kusen']; ?></td>
          </tr>
          <tr>
            <td>Pintu Kamar Mandi</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['pintu_km_mandi']; ?></td>
          </tr>
          <tr>
            <td>Kerangka Atap</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['kerangka_atap']; ?></td>
          </tr>
          <tr>
            <td>Rangka Plafon</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['rangka_plafon']; ?></td>
          </tr>
          <tr>
            <td>Tutup Plafon</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['tutup_plafon']; ?></td>
          </tr>
          <tr>
            <td>Status</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['status']; ?></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td></td>
            <td>:</td>
            <td></td>
            <td><?php echo $row['harga']; ?></td>
          </tr>
          <tr>
          <td>
            <a href="hapus_postingan.php?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>"align="center" class="btn btn-danger btn-sm " name="kirim">
            <span class="far fa-trash-alt"></span>
            </a>
            </td>
          </tr>
          <?php
    } 
          ?>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
  
</body>

</html>