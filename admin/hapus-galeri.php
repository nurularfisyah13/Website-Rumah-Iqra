<?php
    include '../koneksi.php';
    
    if(isset($_GET['idinformasi'])){
        $informasi = mysqli_query($conn, "SELECT gambar FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
        if(mysqli_num_rows($informasi) > 0){
            $p = mysqli_fetch_object($informasi);
            if(file_exists("../uploads/informasi/".$p->gambar)){
                unlink("../uploads/informasi/".$p->gambar);
            }
        }
        $delete = mysqli_query($conn, "DELETE FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
        echo "<script>window.location = 'informasi.php'</script>";
    }
?>