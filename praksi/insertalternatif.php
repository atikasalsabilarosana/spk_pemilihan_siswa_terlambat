<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $id_alternatif = $_POST['id_alternatif'];
    $nm_alternatif = $_POST['nm_alternatif'];

    $sql="INSERT INTO alternatif (id_alternatif,nm_alternatif) VALUES ('".$id_alternatif."','".$nm_alternatif."')";
    $a=$conn->query($sql);

    if($a === true){
        header('location: dtalternatif.php');
    }else{
        echo "erooooor";
    }
}
?>