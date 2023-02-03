<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Peserta</title>
</head>
<body>
    <table border = "0">
        <h1>Edit Data Peserta</h1>

                <form action = "proses-edit.php" method = "POST">
            <form>
                <fieldset>
                <input type = "hidden" name = "id" value="<?php echo $row['id']?>"/>
                    <p>
                        <label for="nama" value="<?php $row['nama']?>">Nama :</label>
                        <input type="text" name="nama"/>
</p>
<p>
    <label for="gender" value="<?php $row['gender']?>">Gender :</label>
    <input type="text" name="gender"/>
</p>
<p>
    <label for="asalsekolah" value="<?php $row['asalsekolah']?>">Asal Sekolah :</label>
    <input type="text" name="asalsekolah"/>
</p>
<p>
    <label for="tempatlahir" value="<?php $row['tempatlahir']?>">Tempat lahir :</label>
    <input type="text" name="tempatlahir"/>
</p>
<p>
    <label for="tanggallahir" value="<?php $row['tanggallahir']?>">Tanggal lahir :</label>
    <input type="date" name="tanggallahir"/>
</p>
<p>
    <label for="jurusan" value="<?php $row['jurusan']?>">Jurusan :</label>
    <input type="text" name="jurusan"/>
</p>
<p>
    <label for="kapasitas" value="<?php $row['kapasitas']?>">Kapasitas :</label>
    <input type="number" name="kapasitas"/>
</p>
<p>
    <label for="terisi" value="<?php $row['terisi']?>">Terisi :</label>
    <input type="number" name="terisi"/>
</p>
<p>
    <button type="submit" name="edit">Simpan</button>
</p>
</fieldset>
</form>
</fieldset>
</form>
</body>
</html>