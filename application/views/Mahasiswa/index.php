<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script>
        function hapusMahasiswa(pesan){
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
    <h3>Mahasiswa</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mhs -> nim ?></td>
                <td><?php echo $mhs -> nama ?></td>
                <td><?php echo $mhs -> gender ?></td>
                <td><?php echo $mhs -> ipk ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id")?>" class="btn btn-primary btn-lg active" >Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/mahasiswa/edit/$mhs->id")?> class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/mahasiswa/delete/$mhs->id")?> class="btn btn-danger btn-lg active" onclick="return hapusMahasiswa('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $mhs->nama?>') " >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    &nbsp;
                    <a href= <?php echo base_url("index.php/mahasiswa/form/$mhs->id")?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>