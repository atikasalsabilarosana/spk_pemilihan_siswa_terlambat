<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Metode Multimoora</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>
<body>

  <div class="container p-5">
  <h1>Multimoora 1</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Matrix</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>ID Bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from multimoora_1
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_matrix']; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['nm_kriteria']; ?></td>
                    <td><?php echo $p['id_bobot']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['nilai']; ?></td>
                    <td><?php echo $p['keterangan']; ?></td>
                    <td><?php echo $p['pra']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Multimoora 2</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Matrix</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>ID Bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
                <td>Normalisasi</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from multimoora_2
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_matrix']; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['nm_kriteria']; ?></td>
                    <td><?php echo $p['id_bobot']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['nilai']; ?></td>
                    <td><?php echo $p['keterangan']; ?></td>
                    <td><?php echo $p['pra']; ?></td>
                    <td><?php echo $p['normalisasi']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Multimoora 3</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Matrix</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>ID Bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Pra</td>
                <td>Normalisasi</td>
                <td>Normalisasi Bobot</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from multimoora_3
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_matrix']; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['nm_kriteria']; ?></td>
                    <td><?php echo $p['id_bobot']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['nilai']; ?></td>
                    <td><?php echo $p['keterangan']; ?></td>
                    <td><?php echo $p['pra']; ?></td>
                    <td><?php echo $p['normalisasi']; ?></td>
                    <td><?php echo $p['normalisasibobot']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Multimoora 4</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Hasil</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from multimoora_4
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['hasil']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
  </div>
      

</body>

</html>