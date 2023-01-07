<?php
include "koneksi.php";
if(isset($_POST['submit'])){
$id_bobot = $_POST['id_bobot'];
$id_kriteria = $_POST['id_kriteria'];
$value = $_POST['value'];

$sql="INSERT INTO bobot (id_bobot,id_kriteria,value) VALUES ('".$id_bobot."','".$id_kriteria."','".$value."')";
$a=$conn->query($sql);
        if($a === true){
            header('location: dtbobot.php');
        }else{
            echo "erooooor";
        }
    }
        ?>