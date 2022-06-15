<?php include 'header.php' ?>

    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tentang Rumah Iqra
                </div>
                <div class="box-body">
                    <?php
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-succes'>".$_GET['success']."</div>";
                        }
                    ?>

                    <form action="" method="POST">

                        <div class="form-group">
                            <label>Tentang Rumah Iqra</label>
                            <textarea name="tentang" class="input-control" placeholder="Tentang Sekolah"><?= $d->tentang ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <img src="../uploads/identitas/<?= $d->foto_iqra ?>" width="200px" class="image">
                            <input type="hidden" name=foto_lama" value="<?= $d->foto_iqra ?>">
                            <input type="file" name="foto_baru" class="input-control">
                        </div>

                        <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $tentang     = addslashes($_POST['tentang']);
                            
                            //menampung dan validasi data foto sekolah
                            if($_FILES['foto_baru']['name'] != ''){
                                $filename   = $_FILES['foto_baru']['name'];
                                $tmpname    = $_FILES['foto_baru']['tmp_name'];
                                $filesize   = $_FILES['foto_baru']['size'];

                                $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                $rename     = 'sekolah'.time().'.'.$formatfile;

                                $allowedtype = array('png', 'jpg', 'jpeg', 'gif');

                                if(!in_array($formatfile, $allowedtype)){
                                    echo '<div class="alert alert-error">Format file foto tidak diizinkan.</div>';
                                    return false;
                                }elseif($filesize > 1000000){
                                    echo '<div class="alert alert-error">Ukuran file foto tidak boleh lebih dari 1 MB.</div>';
                                    return false;
                                }else{
                                if(file_exists("../uploads/identitas/".$_POST['foto_lama'])){
                                    unlink("../uploads/identitas/".$_POST['foto_lama']);
                                }
                                move_uploaded_file($tmpname, "../uploads/identitas/".$rename);
                        }
                        }else{
                            $rename = $_POST['foto_lama'];
                        }

                            $update = mysqli_query($conn, "UPDATE pengaturan SET (
                                        tentang = '".$tentang."',
                                        foto_iqra = '".$rename."',
                                        WHERE id = '".$d->id."' ");
                        
                                if($update){
                                    echo "<script>window.location='tentang-sekolah.php?success=Edit Data Berhasil'</script>";
                                }else{
                                    echo 'gagal edit'.mysqli_error($conn);
                                }
                            }
                    ?> 
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>


