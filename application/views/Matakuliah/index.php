<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <a href="<?php echo base_url("index.php/matakuliah/")?>"></a>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body >
    <div class="col-md-12" >
    <?php
    $username = $this->session->userdata('username');
    if($username){
        echo "<h2><center>Selamat datang $username</center></h2>";
    }
    ?>
    <h3>Matakuliah</h3>
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mtkl) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mtkl -> nama ?></td>
                <td><?php echo $mtkl -> sks ?></td>
                <td><?php echo $mtkl -> kode ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/matakuliah/detail/$mtkl->id")?>" class="btn btn-primary btn-lg active" >Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$mtkl->id")?> class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$mtkl->id")?> class="btn btn-danger btn-lg active" onclick="return hapusMatakuliah('Anda yakin ingin menghapus matakuliah yang bernama <?php echo $mtkl->nama?>') " >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/form/$mtkl->id")?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>