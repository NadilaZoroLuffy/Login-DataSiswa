<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
    <link rel="stylesheet" href="style-3.css">
</head>
<body>
    <div class="kotak2">
        <h2>Tambah Data Siswa</h2>
        <h3>Silahkan Masukkan Datanya...</h3>
        <div class="isi">
            <form action="siswa.php" method="POST">
            <label>Masukkan nama : </label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label>Masukkan NISN : </label><br>
            <input type="text" name="nisn" id="nisn" class="form-control">

            <label>Masukkan Kelas : </label><br>
            <input type="text" name="kelas" id="kelas" class="form-control">

            <label>Masukkan No Telepon : </label><br>
            <input type="text" name="no_hp" id="no_hp" class="form-control">

            <label>Masukkan Email : </label><br>
            <input type="text" name="gmail" id="gmail" class="form-control">

            <label>Masukkan Foto : </label><br>
            <input type="text" name="foto" class="form-control"><br><br>

        <button type="submit" class="btn-login" name="submit">Kirim</button>
    </form>
        </div>
    </div>
</body>
</html>