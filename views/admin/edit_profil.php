    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <?php
            include 'login/koneksi.php';
            $id = $_GET['kd_admin'];

            $query = mysqli_query($koneksi, "select * from tabel_admin where kd_admin = '$id' ");
            $fetch = mysqli_fetch_array($query);
            ?>
            <form method="POST" action="proses_edit_profil.php">
                <input type="hidden" name="kd_admin" value="<?php echo $fetch['kd_admin']; ?>" />
                <table border="0">
                    <tr>
                        <td>Nama</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="nama_admin" spaceholder="Masukkan nama" value="<?php echo $fetch['nama_admin']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="alamat_rumah" spaceholder="Masukkan alamat" value="<?php echo $fetch['alamat_rumah']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="text" name="admin_username" spaceholder="Username" value="<?php echo $fetch['admin_username']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td>:</td>
                        <td></td>
                        <td>
                            <input type="password" name="admin_password" spaceholder="Password" value="<?php echo $fetch['admin_password']; ?>">
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