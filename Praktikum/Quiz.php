<!-- 1. buat from untuk inputan a. nim. b. nama c. thn lahir
2. tampilkan kembali data yang di input 
3. dari inputan tahun lahir tampilkan usia
4. kemudian tampilkan daftar angka berdasarkan jumlah usia dari hasil kalkulasi tahun sekarang dan tahun lahir  -->

<html>
    <head>
        <title>QUIZ</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="NIM"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="NAMA"></td></tr>
                <tr><td>TAHUN_LAHIR</td><td><input type="text" name="TAHUN_LAHIR"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
