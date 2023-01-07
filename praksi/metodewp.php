<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Metode WP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>
<body>

  <div class="container p-5">
    <h1>Jumlah Bobot</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>Jumlah</td>
            </thead>
        </tr>
        <tbody>
        <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT SUM(VALUE) AS jumlah FROM bobot 
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['jumlah']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
    <h1>Normalisasi Bobot</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Bobot</td>
                <td>ID Kriteria</td>
                <td>Value</td>
                <td>Jumlah</td>
                <td>Normalisasi W</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT bobot.*,wp_jumbobot.jumlah,(bobot.value/wp_jumbobot.jumlah) 
            AS normalisasi_w FROM bobot,wp_jumbobot 
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_bobot']; ?></td>
                    <td><?php echo $p['id_kriteria']; ?></td>
                    <td><?php echo $p['value']; ?></td>
                    <td><?php echo $p['jumlah']; ?></td>
                    <td><?php echo $p['normalisasi_w']; ?></td>
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
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>ID Kriteria</td>
                <td>Nama Kriteria</td>
                <td>ID Bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
                <td>Normalisasi W</td>
                <td>Pangkat</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from wp_pangkat
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
                    <td><?php echo $p['normalisasi_w']; ?></td>
                    <td><?php echo $p['pangkat']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
    <h1>Nilai S</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>Nilai S</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from wp_nilais
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['nilaiS']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
    <h1>Jumlah Bobot</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>Jumlah</td>
            </thead>
        </tr>
        <tbody>
        <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from wp_sums
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['jum']; ?></td>
                </tr>               
            <?php
                        }
            ?>
            </tbody>
    </table>
    <h1>Nilai V</h1>
    <table class="table tabel-bordered">
        <tr>
            <thead >
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>Nilai V</td>
            </thead>
        </tr>
        <tbody>
         <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT *from wp_nilaiv
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['nilaiV']; ?></td>
                </tr>               
            <?php
                        }
         ?>
            </tbody>
    </table>
  </div>
      

</body>

</html>