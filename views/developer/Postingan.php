<html>
<head>

<link rel = "stylesheet" href= "bootstrap/css/bootstrap.css">
  <title>form</title>
</head>
<body>
        <!-- 
                <h3>Tambah Data Rumah</h3>

    <form method="POST" action="proses.php">


    
        Kode Data Rumah <input type="text"  name="kd_data_rumah"
        placeholder="isikan kode"> 
                Luas Tanah <input type="number" name="luas_tanah"
                placeholder=" luas tanah">   <br>



        Jumlah kamar Tidur <input type="number" name="jumlah_kamar"
        placeholder=" jumlah kamar">
                Luas Bangunan <input type="number" name="luas_bangunan"
                placeholder=" luas bangunan">   <br>

        Jumlah kamar Mandi<input type="number" name="jumlah_wc"
        placeholder="jumlah kamar mandi"> 
                Sumber Air<input type="text" name="sumber_air"
                placeholder="sumber air"><br>

        Kisaran Harga<input type="text" name="harga"
        placeholder="isikan harga">  
                Daya Listrik<input type="text" name="daya_lisrik"
                placeholder=" daya listrik">  <br>

        Alamat Perumahan <input type="text" name="alamat_perumahan"
        placeholder=" isikan alamat ">  
                Pondasi <input type="text" name="pondasi"
                placeholder=" pondasi "> <br>

        Jumlah unit Rumah <input type="number" name="jumlah_unit_rumah"
        placeholder="isikan jml unit">  
                Dinding <input type="text" name="dinding"
                placeholder="isikan keterangan dinding"> <br>

        Tipe Rumah <input type="text" name="tipe_rumah"
        placeholder="isikan tipe rumah"> 
                Daun Pintu <input type="text" name="daun_pintu"
                placeholder="daun pintu">  <br>

        Status Rumah <input type="text" name="status"
        placeholder="isikan status"> 
                Kusen <input type="text" name="kusen"
                placeholder="kusen">  <br>

        Pintu Kamar Mandi <input type="text" name="pintu_km_mandi"
        placeholder="isikan"> 
                Kerangka Atap <input type="text" name="kerangkat_atap"
                placeholder="kerangkat atap">  <br>

        Rangka Plafon <input type="text" name="rangka_plafon"
        placeholder="rangka plafon"> 
                Tutup Plafon <input type="text" name="tutup_plafon"
                placeholder="tutup_plafon">  <br>

        Latitude <input type="text" name="latitude"
        placeholder="link">   
                Longitude <input type="text" name="longitude"
                placeholder="link">
                        Ukuran Keramik <input type="text" name="keramik"
                        placeholder="keramik"><br>

<h6>Pilih Foto Rumah</h6>
        Foto Depan <input type="file" name="foto_1"
        placeholder="upload foto"> <br>
                Foto Belakang <input type="file" name="foto_1"
                placeholder="upload foto"> <br>
                        Foto Kamar Tidur <input type="file" name="foto_1"
                        placeholder="upload foto"> <br>
                                Foto Kamar Mandi <input type="file" name="foto_1"
                                placeholder="upload foto"> <br>
                                         Foto Ruang Tamu <input type="file"  name="foto_1"
                                         placeholder="upload foto"> <br>
                                                        -->



<div class="container-fluid">
<h1>Tambah Data Rumah</h1>

<form method="POST" action="proses.php">

        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Kode Data Rumah <input type="text" class="form-control" name="kd_data_rumah" placeholder="Kode Rumah">
        </div>
        </div>
                <div class="col-sm-4">
                <div class="col">
                Luas Tanah <input type="number" class="form-control" name="luas_tanah" placeholder="Luas Tanah">
                </div>
                </div>
                </div>

        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Jumlah Kamar Tidur <input type="number" class="form-control" name="jumlah_kamar" placeholder="Jumlah Kamar">
        </div>
        </div>
                <div class="col-sm-4">
                <div class="col">
                Luas Bangunan <input type="number" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
                </div>
                </div> 
                </div>

        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Jumlah Kamar Mandi <input type="number" class="form-control" name="jumlah_wc" placeholder="Jumlah Kamar Mandi">
        </div>
        </div>
                <div class="col-sm-4"> 
                <div class="col">
                Sumber Air <input type="text" class="form-control" name="sumber_air" placeholder="Sumber Air">
                </div>
                </div>
                </div>

        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Kisaran Harga <input type="number" class="form-control" name="harga" placeholder="Harga">
        </div>
        </div>
                <div class="col-sm-4">      
                <div class="col">
                Daya Listrik <input type="number" class="form-control" name="daya_listrik" placeholder="Daya Listrik">
                </div>
                </div>
                </div>

        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Alamat Perumahan <input type="text" class="form-control" name="alamat_perumahan" placeholder="Alamat">
        </div>
        </div>
                <div class="col-sm-4">
                <div class="col">
                Pondasi <input type="text" class="form-control" name="pondasi" placeholder="Pondasi">
                </div>
                </div>
                </div>
        <div class="row">
        <div class="col-sm-4">
        <div class="col">
        Jumlah Unit Rumah <input type="number" class="form-control" name="jumlah_unit_rumah" placeholder="Unit">
        </div>
        </div>
                <div class="col-sm-4">
                <div class="col">
                 Dinding <input type="text" class="form-control" name="dinding" placeholder="Dinding">
                </div>
                </div>
                </div>
        <div class="row">
        <div class="col-sm-4"> 
        <div class="col">
        Tipe Rumah <input type="number" class="form-control" name="tipe_rumah" placeholder="Tipe Rumah">
        </div>
        </div>
                <div class="col-sm-4">
                <div class="col">
                Daun Pintu <input type="text" class="form-control" name="daun_pintu" placeholder="Daun Pintu">
                </div>
                </div>
                </div>
        <div class="row">
        <div class="form-group col-md-4"> 
        <div class="col">
        Status Rumah <input type="text" class="form-control" name="status" placeholder="Status">
        </div>
        </div>
                <div class="col-sm-4"> 
                <div class="col">
              Kusen <input type="text" class="form-control" name="kusen" placeholder="Kusen">
                </div>
                </div>
                </div>
        <div class="row">
        <div class="form-group col-md-4">        
        <div class="col">
        Ukuran Keramik <input type="text" class="form-control" name="keramik" placeholder="Ukuran Keramik">
        </div>
        </div>
                <div class="col-sm-4">     
                <div class="col"> 
                Pintu Kamar Mandi <input type="text" class="form-control" name="pintu_km_mandi" placeholder="Pintu">
                </div>
                </div>
                </div>
        <div class="row">
        <div class="form-group col-md-4">        
        <div class="col">
        Kerangka Atap <input type="text" class="form-control" name="kerangkat_atap" placeholder="Kerangka Atap">
        </div>
        </div>
                <div class="col-sm-4">     
                <div class="col"> 
                Rangka Plafon <input type="text" class="form-control" name="rangka_plafon" placeholder="Rangka Plafon">
                </div>
                </div>
                </div>

        <div class="row">
        <div class="form-group col-md-4">        
        <div class="col">
        Tutup Plafon <input type="text" class="form-control" name="tutup_plafon" placeholder="Tutup Plafon">
        </div>
        </div>
        
                <div class="col-sm-4">     
                <div class="col"> 
                Masukan Link Google Maps Perumahan <input type="text" class="form-control-sm" name="latitude" placeholder="latitude">
                <input type="text" class="form-control-sm" name="longitude" placeholder="longitude">
                </div>
                </div>
                </div>
                
               

    <div class="row">
    <div class="form-group col-md-4">        
    <div class="col">
        Upload Foto Rumah <input type="file" class="form-control" name="foto_1">
        Foto Kamar<input type="file" class="form-control" name="foto_2">
        Foto Kamar Mandi<input type="file" class="form-control" name="foto_3">
        Foto Ruang Tamu<input type="file" class="form-control" name="foto_4" >
        Foto Dapur<input type="file" class="form-control" name="foto_5">
</div>
</div>
</div>





</form>





        <p>
        <div class="form-group col-md-4"> 
            <input type="submit"name="btn_Submit"
            value="submit" class="btn btn-secondary">
        </div>
        </p>

        
</body>
</html>