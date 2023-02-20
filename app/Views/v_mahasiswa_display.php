<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAHASISWA</title>
</head>

<form action="<?= base_url('mahasiswa') ?>" method="get">
        <a href="/mahasiswa">back</a>
        &nbsp
        <input type="search" name="keyword" placeholder="Masukkan Nama Mahasiswa" autofocus>
        <button type="submit">Cari</button>
    </form><br>

<h1>Data Mahasiswa</h1>
<br>


<body>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th >Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['NIM'] ?></td>
                    <td><?= $mhs['Nama'] ?></td>
                    <td><?= $mhs['Umur'] ?></td>
                    <td><a href="/viewdetail/<?=$mhs['NIM']?>">View Details</a>
                    &nbsp
                    <a href="/edit/<?=$mhs['NIM']?>">Edit</a>
                    &nbsp
                    <a href="/delete/<?=$mhs['NIM']?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <a href="create">
        <button>Tambah Data Mahasiswa</button>
    </a>

</body>

</html>

<?= $this->endSection(); ?>