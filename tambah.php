<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Peserta</title>
</head>
<body>
    <table border = "0">
        <h1>Input Data Peserta</h1>
        <form action = "proses_tambah.php" method = "POST">
            <form>
                <fieldset>
                    <p>
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama"/>
</p>
<p>
    <label for="gender">Gender :</label>
    <input type="text" name="gender"/>
</p>
<p>
    <label for="asalsekolah">Asal Sekolah :</label>
    <input type="text" name="asalsekolah"/>
</p>
<p>
    <label for="tempatlahir">Tempat lahir :</label>
    <input type="text" name="tempatlahir"/>
</p>
<p>
    <label for="tanggallahir">Tanggal lahir :</label>
    <input type="date" name="tanggallahir"/>
</p>
<p>
    <label for="jurusan">Jurusan :</label>
    <input type="text" name="jurusan"/>
</p>
<p>
    <label for="kapasitas">Kapasitas :</label>
    <input type="number" name="kapasitas"/>
</p>
<p>
    <label for="terisi">Terisi :</label>
    <input type="number" name="terisi"/>
</p>
<p>
    <input type="submit" value="kirim data" name="kirim-data"/>
</p>
</fieldset>
</form>
</body>
</html>