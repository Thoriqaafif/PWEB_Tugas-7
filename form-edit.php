<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftar WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-box{
            border:solid 1px;
            border-radius: 5px;
            display: inline-block;
            padding:20px;
            background-color: white;
        }
    </style>

</head>

<body>
    <div class="d-flex flex-column vw-100 vh-100 align-items-center justify-content-center bg-secondary">
        <div class="form-box">
            <header class="d-flex justify-content-center">
                <h1>Formulir Edit Siswa</h1>
            </header>

            <div class="d-flex justify-content-center mt-4">
                <form action="proses-edit.php" method="POST">

                    <fieldset>

                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                    <p>
                        <label for="nama" class="d-block">Nama: </label>
                        <input type="text" name="nama" maxlength="50" class="my-2" size="50" placeholder="Nama lengkap..." value="<?php echo $siswa['nama'] ?>"/>
                    </p>
                    <p>
                        <label for="alamat" class="d-block">Alamat: </label>
                        <textarea name="alamat" id="alamat" cols="53" rows="4" class="my-2"><?php echo $siswa['alamat'] ?></textarea>
                    </p>
                    <p>
                        <label for="jenis_kelamin" class="d-block">Jenis Kelamin: </label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                        <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                    </p>
                    <p>
                        <label for="agama">Agama: </label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama" class="mx-2">
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                        </select>
                    </p>
                    <p>
                        <label for="sekolah_asal" class="d-block">Sekolah Asal: </label>
                        <input type="text" name="sekolah_asal" maxlength="50" class="my-2" size="50" placeholder="Nama sekolah..." value="<?php echo $siswa['sekolah_asal'] ?>"/>
                    </p>
                    <p>
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-info"/>
                    </p>

                    </fieldset>


                </form>
            </div>
        </div>
    </div>

    </body>
</html>