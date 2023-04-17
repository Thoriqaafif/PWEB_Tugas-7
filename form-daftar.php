<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
                <h1 style="color:#3c486b">Formulir Pendaftaran Siswa Baru</h1>
            </header>

            <div class="d-flex justify-content-center mt-4">
                <form action="proses-pendaftaran.php" method="POST">

                    <fieldset>

                    <p>
                        <label for="nama" class="d-block">Nama: </label>
                        <input type="text" name="nama" maxlength="50" class="my-2" size="50" placeholder="Nama lengkap..."/>
                    </p>
                    <p>
                        <label for="alamat" class="d-block">Alamat: </label>
                        <textarea name="alamat" id="alamat" cols="53" rows="4" class="my-2"></textarea>
                    </p>
                    <p>
                        <label for="jenis_kelamin" class="d-block">Jenis Kelamin: </label>
                        <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                        <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                    </p>
                    <p>
                        <label for="agama">Agama: </label>
                        <select name="agama" class="mx-2">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </p>
                    <p>
                        <label for="sekolah_asal" class="d-block">Sekolah Asal: </label>
                        <input type="text" name="sekolah_asal" maxlength="50" class="my-2" size="50" placeholder="Nama sekolah..."/>
                    </p>
                    <p>
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-primary"/>
                    </p>

                    </fieldset>

                </form>
            </div>
        </div>
    </div>

</body>
</html>