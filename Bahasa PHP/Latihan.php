<html>
    <head>
        <title>Membuat Form Biodata</title>
        
    </head>
    <body>
    <h1>Form Biodata</h1>
        <?php
        if (isset($_GET['nama'])) {
            if ($_GET['nama'] == "kosong") {
                echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
            }
        }
    ?>
        <h4>Masukkan Biodata Anda </h4>
	    <form action="cekLatihan.php" method="post">
        <div>
            <label>Nama</label>
            <input name="nama" type="text" id="nama"placeholder="Masukkan nama"required>
        </div><br>
        <div>
            <label>Alamat</label>
            <input name="alamat" type="text" id="alamat"placeholder="Masukkan alamat"required>
        </div><br>
        <div>
            <label>Tempat</label>
            <input name="tempat" type="text"  id="tempat"placeholder="Masukkan tempat"required>
        </div><br>
        <div>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
            </select>
        </div><br>
        <div>
            <label>Usia</label>
            <input name="usia" type="text" id="usia"placeholder="Masukkan usia"required>
        </div><br>
        <div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
            </form>
    </body>
</html>