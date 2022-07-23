<?php
$pungguna = [
    mysqli_query($conn, "SELECT * FROM pengguna WHERE id => '".$_GET['id']."'")
];
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$p = $query->fetch_object();
//print_r($rows);
?>
<!-- content -->
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Pengguna
                </div>

                <div class="box-body">

                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="nama lengkap" class="input-control" value="<?= $p->nama?>" required>
                        </div>
                        <div class="from-group">
                            <label>Username</label>
                            <input type="text" name="user" placeholder="username" class="input-control" value="<?= $p->Username?>" required>
                        </div>
                        <div class="form-group">
                            <label>level</label>
                            <select name="level" class="input-control" required>
                                <option value="">pilih</option>
                                <option value="Super Admin" <?=($p->level == 'Super Admin')? 'selected':'';?>>Super Admin</option>
                                <option value="Admin"<?=($p->level == 'Admin')? 'Selected':'';?>>Admin</option>
                            </select>
                        </div>
                        <button type="button" class="btn" onclick="window.location = 'pengguna.php'">kembali</button>
                        <input type="submit" name="submit" value="simpan" class="btn" btn-blue>
                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $nama = ucwords($_POST['nama']);
                            $user = $_POST['user'];
                            $level = $_POST['level'];
                            $currdate = date('Y-m-d H:i:s');

                            $update = mysqli_query($conn, "UPDATE pengguna SET 
                            nama = '".$nama."',
                            username = '".$user."',
                            level = '".$level."',
                            update_t = '".$currdate."',
                            WHERE id = '".$_GET['id']."'
                        ");

                            if($update){
                                echo '<div class="alert alert-success">Edit data berhasil</div>';
                            }else{
                                echo 'gagal edit' .mysqli_error($conn);
                            }
                        }
                        ?>
                </div>
            </div>
        </div>

    </div>
<?php include 'footer.php' ?>