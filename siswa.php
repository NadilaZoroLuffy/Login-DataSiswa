<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    <div class="kotak">
        <h2>Data Siswa</h2>
        
        <div class="opsi"><br><br>
        <a href="tambah_siswa.php">Tambah Data Peserta Didik</a><br><br><br>
        <a href="bahasa">Pengaturan</a><br><br><br>
        <a href="akun.php">Akun</a><br><br><br>
        <a href="login.php">Log-Out</a><br><br>
    </div>
        <div class="kotak-2">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Nama lengkap</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>No.Telepon</th>
                    <th>Gmail</th>
                    <th>Foto</th>
                </tr>
                <?php if(isset($_POST["submit"])) : ?>
                    <tr>
                        <td><?= $_POST["nama_lengkap"]; ?></td>
                        <td><?= $_POST["nisn"]; ?></td>
                        <td><?= $_POST["kelas"]; ?></td>
                        <td><?= $_POST["no_hp"]; ?></td>
                        <td><?= $_POST["gmail"]; ?></td>
                        <td><img src="<?= $_POST["foto"]; ?>" width="80px"></td>
                    </tr>
                    <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>