<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form mahasiswa</title>
</head>
<body> 
    <center>
    <img src="logo.png" alt="" width="100">
    <h3>FORM PENDATAAN MAHASISWA <br>
        SISTEM INFORMASI</h3>
    <form action="" method="get">
        <table cellpadding="5">
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nip"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="namamahasiwa"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki <br>
                <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="berenang">Berenang <br>
                <input type="checkbox" name="hobi" value="memanah">Memanah <br>
                <input type="checkbox" name="hobi" value="lainnya">Lainnya
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td><textarea name="komentar" id="" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td><input type="submit" value="kirim" name="kirim"> 
                <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>