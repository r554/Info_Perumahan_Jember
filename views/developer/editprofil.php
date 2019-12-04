    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <!-- Main content -->
      <section class="content">

        <?php
        include 'Login/koneksi.php';
        $id = $_GET['nik'];

        $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
        $fetch = mysqli_fetch_array($query);
        ?>
        <form method="POST" action="prosesedit.php">
          <input type="hidden" name="nik" value="<?php echo $fetch['nik']; ?>" />
          <table border="0">
            <tr>
              <td>Nama Developer</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td>
                <input type="text" name="nama_dev" spaceholder="Masukkan nama" value="<?php echo $fetch['nama_dev']; ?>">
              </td>
            </tr>
            <tr>
              <td>Alamat Developer</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td>
                <input type="text" name="alamat_dev" spaceholder="Masukkan alamat" value="<?php echo $fetch['alamat_dev']; ?>">
              </td>
            </tr>
            <tr>
              <td>No Telphon</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td>
                <input type="text" name="no_dev" spacehoder="No Telphon" value="<?php echo $fetch['no_dev']; ?>">
              </td>
            </tr>
            <tr>
              <td>Username</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td>
                <input type="text" name="username_dev" spaceholder="Username" value="<?php echo $fetch['username_dev']; ?>">
              </td>
            </tr>
            <tr>
              <td>Password</td>
              <td></td>
              <td>:</td>
              <td></td>
              <td>
                <input type="password" name="password_dev" spaceholder="Password" value="<?php echo $fetch['password_dev']; ?>">
              </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="SIMPAN"></td>
            </tr>
          </table>
        </form>
        <?php
        ?>

      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->



    <footer class="main-footer">
      <h10><b>Copyright&copy;</b>Info Perumahan Jember</h10>
    </footer>


    </div>
    <!-- ./wrapper -->