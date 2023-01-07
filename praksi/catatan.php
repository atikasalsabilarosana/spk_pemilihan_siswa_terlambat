<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alternatif</title>
</head>
<body>
    <h1>Data Alternatif</h1>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID matrix</td>
                <td>ID alternatif</td>
                <td>nama alternatif</td>
                <td>ID kriteria</td>
                <td>nama kriteria</td>
                <td>ID bobot</td>
                <td>Value</td>
                <td>Nilai</td>
                <td>Keterangan</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT matrixkeputusan.id_matrix,alternatif.*,kriteria.*,bobot.id_bobot,bobot.value,
            skala.value AS nilai,skala.keterangan FROM matrixkeputusan,skala,bobot,kriteria,
            alternatif WHERE matrixkeputusan.id_alternatif=alternatif.id_alternatif AND 
            matrixkeputusan.id_bobot=bobot.id_bobot AND matrixkeputusan.id_skala=skala.id_skala
            AND kriteria.id_kriteria=bobot.id_kriteria 
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
                </tr>               
            <?php
                        }
            ?>
        </tbody>
    </table>

    <h1>Detail Normalisasi</h1>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID matrix</td>
                <td>ID alternatif</td>
                <td>nama alternatif</td>
                <td>ID kriteria</td>
                <td>nama kriteria</td>
                <td>ID bobot</td>
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
            $kat=mysqli_query($conn,"SELECT vmatrixkeputusan.*,(vmatrixkeputusan.nilai/nilaimax.maksimum) AS
            normalisasi FROM vmatrixkeputusan,nilaimax WHERE nilaimax.id_kriteria=
            vmatrixkeputusan.id_kriteria GROUP BY vmatrixkeputusan.id_matrix 
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

    <h1>Detail Perangkingan</h1>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <td>ID Alternatif</td>
                <td>Nama Alternatif</td>
                <td>Rangking</td>
            </thead>
        </tr>
        <tbody>
            <?php
            include "koneksi.php";
            $no = 1;
            $kat=mysqli_query($conn,"SELECT id_alternatif,nm_alternatif,SUM(prarangking) AS rangking FROM vprarangking
            GROUP BY id_alternatif 
            ");
            while($p=mysqli_fetch_array($kat)){

                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p['id_alternatif']; ?></td>
                    <td><?php echo $p['nm_alternatif']; ?></td>
                    <td><?php echo $p['rangking']; ?></td>
                </tr>               
            <?php
                        }
            ?>
        </tbody>
    </table>
</body>
</html>