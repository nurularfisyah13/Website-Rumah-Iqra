<?php include 'header.php' ?>

    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Identitas Rumah Iqra
                </div>
                <div class="box-body">
                    <?php
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-succes'>".$_GET['success']."</div>";
                        }
                    ?>

                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama Sekolah"  value="<?= $d->nama ?>" class="input-control" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Sekolah"  value="<?= $d->email ?>" class="input-control" required>
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="telp" placeholder="Telepon Sekolah"  value="<?= $d->telepon ?>" class="input-control" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="input-control" placeholder="Alamat"><?= $d->alamat ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Lokasi</label>
                            <textarea name="lokasi" class="input-control" placeholder="Lokasi"><?= $d->lokasi ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <img src="../uploads/identitas/<?= $d->logo ?>" width="200px" class="image">
                            <input type="hidden" name=logo_lama" value="<?= $d->logo ?>">
                            <input type="file" name="logo_baru" class="input-control">
                        </div>

                        <div class="form-group">
                            <label>Favicon</label>
                            <img src="../uploads/identitas/<?= $d->favicon ?>"width="32" class="image">
                            <input type="hidden" name=favicon_lama" value="<?= $d->favicon ?>">
                            <input type="file" name="favicon_baru" class="input-control">
                        </div>

                        <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $nama     = addslashes(ucwords($_POST['nama']));
                            $email    = addslashes($_POST['email']);
                            $telp     = addslashes($_POST['telp']);
                            $alamat   = addslashes($_POST['alamat']);
                            $lokasi   = addslashes($_POST['lokasi']);
                            
                            //menampung dan validasi data logo
                            if($_FILES['logo_baru']['name'] != ''){
                                $filename   = $_FILES['logo_baru']['name'];
                                $tmpname    = $_FILES['logo_baru']['tmp_name'];
                                $filesize   = $_FILES['logo_baru']['size'];

                                $formatfile_logo = pathinfo($filename_logo, PATHINFO_EXTENSION);
                                $rename_logo     = 'logo'.time().'.'.$formatfile_logo;

                                $allowedtype_logo = array('png', 'jpg', 'jpeg', 'gif');

                                if(!in_array($formatfile_logo, $allowedtype_logo)){
                                    echo '<div class="alert alert-error">Format file logo tidak diizinkan.</div>';
                                    return false;
                                }elseif($filesize_logo > 1000000){
                                    echo '<div class="alert alert-error">Ukuran file logo tidak boleh lebih dari 1 MB.</div>';
                                    return false;
                                }else{
                                if(file_exists("../uploads/identitas/".$_POST['logo_lama'])){
                                    unlink("../uploads/identitas/".$_POST['logo_lama']);
                                }
                                move_uploaded_file($tmpname_logo, "../uploads/identitas/".$rename_logo);
                        }
                        }else{
                            $rename_logo = $_POST['logo_lama'];
                        }

                            //menampung dan validasi data favicon
                            if($_FILES['favicon_baru']['name'] != ''){
                                $filename   = $_FILES['favicon_baru']['name'];
                                $tmpname    = $_FILES['favicon_baru']['tmp_name'];
                                $filesize   = $_FILES['favicon_baru']['size'];

                                $formatfile_favicon = pathinfo($filename_favicon, PATHINFO_EXTENSION);
                                $rename_favicon     = 'favicon'.time().'.'.$formatfile_favicon;

                                $allowedtype_favicon = array('png', 'jpg', 'jpeg', 'gif');

                                if(!in_array($formatfile_favicon, $allowedtype_favicon)){
                                    echo '<div class="alert alert-error">Format file favicon tidak diizinkan.</div>';
                                    return false;
                                }elseif($filesize_favicon > 1000000){
                                    echo '<div class="alert alert-error">Ukuran file favicon tidak boleh lebih dari 1 MB.</div>';
                                    return false;
                                }else{
                                if(file_exists("../uploads/identitas/".$_POST['favicon_lama'])){
                                    unlink("../uploads/identitas/".$_POST['favicon_lama']);
                                }
                                move_uploaded_file($tmpname_favicon, "../uploads/identitas/".$rename_favicon);
                        }
                        }else{
                            $rename_favicon = $_POST['favicon_lama'];
                        }

                            $update = mysqli_query($conn, "UPDATE pengaturan SET (
                                        nama = '".$nama."',
                                        email = '".$email."',
                                        telepon = '".$telp."',
                                        alamat = '".$alamat."',
                                        lokasi = '".$lokasi."',
                                        logo = '".$rename_logo."',
                                        favicon = '".$rename_favicon."',
                                        WHERE id = '".$d->id."' ");
                        
                                if($update){
                                    echo "<script>window.location='identitas-sekolah.php?success=Edit Data Berhasil'</script>";
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


