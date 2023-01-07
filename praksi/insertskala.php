<?php
include "koneksi.php";
$id_skala = $_POST['id_skala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];

$sql="INSERT INTO skala (id_skala,value,keterangan) VALUES ('".$id_skala."','".$value."','".$keterangan."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtskala.php');
        }else{
            echo "erooooor";
        }
        ?>