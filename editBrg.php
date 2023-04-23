<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id= '$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $nama = $row['nama'];
    $hrg = $row['hrg'];
    $jml = $row['jml'];
    $keterangan = $row['keterangan'];
    $foto = $row['foto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row jsutify-content-center">
            <div class="col-10">
                <h1>Form Edit Barang</h1>
                <form action="updBrg.php" method="post">
                    <div class="mb-3">
                        <label for="11" class="form-control">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" value="<?= $id; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-control">Nama Barang</label>
                        <input type="text" class="form-control" id="nama" name="tnama" value="<?= $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-control">Harga</label>
                        <input type="text" class="form-control" id="hrg" name="thrg" value="<?= $hrg; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-control">Jumlah Stok</label>
                        <input type="text" class="form-control" id="jml" name="tjml" value="<?= $jml; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-control">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
                        <img src="img/<?php echo $foto; ?>" width="150px" height="120px" alt="">
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>