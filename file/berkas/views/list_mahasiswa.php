<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Berkas</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=mahasiswa&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <a = class='btn btn-warning btn-sm text-dark' href='#'><i class='fa-solid fa-print'></i> PrintOut Data</a>
        <a class='btn btn-primary btn-sm text-light' href='#'><i class='fa-solid fa-cloud-arrow-down'></i> Export Data</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>NIU</th><th>Profile</th><th>Calon</th><th>Ijazah</th><th>KTP</th><th>S per</th><th>SKCK</th><th>C Vitae</th><th></th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $join = [
            "LEFT JOIN calon as p on p.kd_calon=m.kd_calon",
            
        ];
        $where = [
            'm.kd_calon' => $_SESSION['id']
        ];
        $q = __ambil($db, "berkas as m", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['niu'] . "</td>
            <td><img src=profil/" . $r['profil'] . "width=50></td>
            <td>" . $r['nama_calon'] . "</td>
            <td><img src=profil/" . $r['ijazah'] . " width=50></td>
            <td><img src=profil/" . $r['ktp'] . " width=50></td>
            <td><img src=profil/" . $r['sp'] . " width=50></td>
            <td><img src=profil/" . $r['skck'] . " width=50></td>
            <td><img src=profil/" . $r['cv'] . " width=50></td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=berkas&action=edit&id=" . $r['niu'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=berkas&action=delete&id=" . $r['niu'] . "'>
                    <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>