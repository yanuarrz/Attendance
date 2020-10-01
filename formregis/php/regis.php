<html>

<head>
    <title>proses data dari form</title>
</head>

<body>
    <h1>proses simpan buku tamu</h1>
    <?
    ///membuat koneksi ke database
    $server = "localhost"; ///nama server
    $username = "root"; ///nama username mysql
    $password = ""; ///password, kosongkan jika tidak ada
    $database = "websederhana"; ///nama database yang dipilih

    mysql_connect($server, $username, $password, $database) or die("Koneksinya Gagal"); ///koneksi ke database
    mysql_select_db($websederhana) or die("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
    ///mengambil data dari form
    $namauser = $_POST[username];
    $email = $_POST[email];
    $password = $_POST[password];
    $name = $_POST[name];
    $status = $_POST[statuspendaftar];

    ///input ke tabel pengunjung
    $input = mysql_query("INSERT INTO register (username, email, password, name, statuspendaftar) VALUES ('$namauser', '$email', '$password', '$name', '$status)");
    ///cek sudah terinput atau belum
    if ($input) ///jika sukses
    {
        echo "Buku tamu berhasil disimpan";
    } else ///jika gagal
    {
        echo "Buku tamu gagal disimpan";
    }
    ?>
    | <a href=".html">OK</a>
</body>

</html>