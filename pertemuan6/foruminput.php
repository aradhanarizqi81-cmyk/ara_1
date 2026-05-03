<html>

<head>
    <title>Input Data Mahasiswa</title>
</head>

<body bgcolor="tosca">
    <form action="forumoutput.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>
        <pre>
Nama   : <input type="text" name="nama" size="25" maxlength="50">
Alamat : <input type="text" name="alamat" size="25" maxlength="50">
        </pre>
        Jenis Kelamin:
        <input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
        <br><br>
        Pekerjaan:
        <select name="pekerjaan">
            <option value="-Pilih-">-Pilih-</option>
            <option value="Pelajar">Pelajar</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Lain-lain">Lain-lain</option>
        </select>
        <p>
            Hobi :
            <input type="checkbox" name="hobi1" value="tinju"> tinju
            <input type="checkbox" name="hobi2" value="nonton tim badut"> nonton tim badut
            <input type="checkbox" name="hobi3" value="Jalan-Jalan"> Jalan-Jalan
        <p>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
        </p>
    </form>
</body>

</html>