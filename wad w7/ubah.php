<?php
require 'functions.php';

$id = $_GET["id"];
$tes = query("SELECT * FROM toko where id = $id")[0];

if (isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'toko.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'toko.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Ubah Data Toko Kosmetik</title>
</head>
<body>
    <h1>Ubah Data Toko Kosmetik</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tes["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Jenis Kosmetik :</label><br>
                <input type="text" name="nama" id="nama" required value ="<?= $tes["nama"]; ?>">
            </li>
            <li>
                <label for="kode">Kode Kosmetik :</label><br>
                <input type="text" name="kode" id="nama" required value ="<?= $tes["kode"]; ?>">
            </li>
            <li>
                <label for="harga">Harga  :</label><br>
                <input type="text" name="harga" id="harga" required value ="<?= $tes["harga"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar" required value ="<?= $tes["gambar"]; ?>"><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>