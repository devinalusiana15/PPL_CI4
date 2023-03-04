<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Pegawai</title>
</head>

<h1>Data Pegawai</h1>
<br>

<body>
    <table class="table table-bordered table-striped" style="width:40%" >
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Pendidikan</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($pegawai as $pg) : ?>
                <tr>
                    <td><?= $pg['nim'] ?></td>
                    <td><?= $pg['nama'] ?></td>
                    <td><?= $pg['gender'] ?></td>
                    <td><?= $pg['telp']?></td>
                    <td><?= $pg['email']?></td>
                    <td><?= $pg['pendidikan']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <a href="addpegawai">
        <button class="btn btn-primary">Tambah Data Pegawai</button>
    </a>

</body>

</html>

<?= $this->endSection(); ?>