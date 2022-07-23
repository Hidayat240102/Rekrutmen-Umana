<div class="card">
    <div class="card-header">
<<<<<<< HEAD:file/prodi/views/list_calon.php
        <h4><i class="fa-solid fa-database"></i> Data calon</h4>
=======
        <h4><i class="fa-solid fa-database"></i> Data Prodi</h4>
>>>>>>> aa2b02375f320762ef4a5c0304cb3de31192a7e9:file/calon/views/list_calon.php
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
<<<<<<< HEAD:file/prodi/views/list_calon.php
        echo "<a class ='btn btn-info btn-sm text-light' href='admin.php?target=calon&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
=======
        echo "<a class ='btn btn-info btn-sm text-light' href='admin.php?target=prodi&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
>>>>>>> aa2b02375f320762ef4a5c0304cb3de31192a7e9:file/calon/views/list_calon.php
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
<<<<<<< HEAD:file/prodi/views/list_calon.php
            <th>No</th><th>Kode calon</th><th>Nama calon</th><th>Opsi</th>
=======
            <th>No</th><th>Kode Prodi</th><th>Nama Prodi</th><th>Opsi</th>
>>>>>>> aa2b02375f320762ef4a5c0304cb3de31192a7e9:file/calon/views/list_calon.php
        </tr>
        </thead>
        <tbody>";
        //ambildata
<<<<<<< HEAD:file/prodi/views/list_calon.php
        $q = __ambil($db, "calon");
=======
        $q = __ambil($db, "prodi");
>>>>>>> aa2b02375f320762ef4a5c0304cb3de31192a7e9:file/calon/views/list_calon.php
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
<<<<<<< HEAD:file/prodi/views/list_calon.php
            <td>" . $r['kd_calon'] . "</td>
            <td>" . $r['nama_calon'] . "</td>
            <td><img src=profil/" .$r['profil']. " width=50></td>
            <td>" . $r['status'] . "</td>
            <td>" . $r['tel'] . ", " . $r['tl'] . "</</td>
            <td>" . $r['alamat'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=calon&action=edit&id=" . $r['kd_calon'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=calon&action=delete&id=" . $r['kd_calon'] . "'>
=======
            <td>" . $r['kd_prodi'] . "</td>
            <td>" . $r['nama_prodi'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=prodi&action=edit&id=" . $r['kd_prodi'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=prodi&action=delete&id=" . $r['kd_prodi'] . "'>
>>>>>>> aa2b02375f320762ef4a5c0304cb3de31192a7e9:file/calon/views/list_calon.php
                    <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>