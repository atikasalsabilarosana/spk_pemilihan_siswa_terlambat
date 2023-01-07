<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Metode Topsis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>
<body>

  <div class="container p-5">
    <h1>Nilai Pembagi</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>Pembagi</td>
            </thead>
        </tr>
        <tbody>
        <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *FROM topsis_pembagi
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['nm_kriteria']; ?></td>
                    <td><?php echo $p['bagi']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
    <h1>Normalisasi</h1>
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
                <td>Normalisasi</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from topsis_normalisasi
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
                    <td><?php echo $p['normalisasi']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Normalisasi Terbobot</h1>
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
                <td>Normalisasi</td>
                <td>Terbobot</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from topsis_terbobot
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
                    <td><?php echo $p['normalisasi']; ?></td>
                    <td><?php echo $p['terbobot']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Nilai Pangkat</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Matrix</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>Maximum</td>
                <td>Minimum</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from topsis_maxmin
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_matrix']; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['nm_kriteria']; ?></td>
                    <td><?php echo $p['maximum']; ?></td>
                    <td><?php echo $p['minimum']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
    <h1>SIP dan SIN</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Solusi Ideal Positif</td>
                <td>Solusi Ideal Negatif</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from topsis_sipsin
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['dplus']; ?></td>
                    <td><?php echo $p['dmin']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Nilai Preferensi Alternatif (V)</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Solusi Ideal Positif</td>
                <td>Solusi Ideal Negatif</td>
                <td>Nilai Preferensi Alternatif</td>
            </thead>
        </tr>
        <tbody>
        <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from topsis_nilaiv
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['dplus']; ?></td>
                    <td><?php echo $p['dmin']; ?></td>
                    <td><?php echo $p['nilaiv']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
  </div>
      

</body>

</html>