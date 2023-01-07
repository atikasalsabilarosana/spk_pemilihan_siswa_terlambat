<?php
include "koneksi.php";
$id_matrix = $_POST['id_matrix'];
$id_alternatif = $_POST['id_alternatif'];
$id_bobot = $_POST['id_bobot'];
$id_skala = $_POST['id_skala'];

$sql="INSERT INTO matrixkeputusan (id_matrix,id_alternatif,id_bobot,id_skala) VALUES ('".$id_matrix."','".$id_alternatif."','".$id_bobot."','".$id_skala."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtmatrix.php');
        }else{
            echo "erooooor";
        }
        ?>