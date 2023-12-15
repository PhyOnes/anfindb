<?php 

    include ("connection.php");

    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $kegiatan = $_POST['kegiatan'];
        $category = $_POST['category'];
        var_dump($id);

        $result = mysqli_query($mysqli, "UPDATE task SET judul='$judul', kegiatan='$kegiatan', category='$category' WHERE id= $id");
        header('location:viewTask.php');
    } else {
        die("AKSES DILARANG!");
    }

?>