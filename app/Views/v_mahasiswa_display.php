<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>MAHASISWA</title>
</head>

<form action="<?= base_url('mahasiswa') ?>" method="get" class="row" style="margin:auto">
  <div class="col-5" style="display:flex;justify-content:flex-start;">
    <a href="/mahasiswa" class="btn btn-secondary">back</a>
        &nbsp
  </div>
  <div class="col-2">
    <input type="search" name="keyword" placeholder="Masukkan Nama Mahasiswa" autofocus class="form-control ">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Cari</button>
  </div>
</form>
</form><br>
<h1>Data Mahasiswa</h1>
<br>

<body>
    <table class="table table-bordered table-info table-striped" style="width:40%" >
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['NIM'] ?></td>
                    <td><?= $mhs['Nama'] ?></td>
                    <td><?= $mhs['Umur'] ?></td>
                    <td><a href="/viewdetail/<?=$mhs['NIM']?>" class="btn btn-success">View Details</a>
                    &nbsp
                    <a href="/edit/<?=$mhs['NIM']?>" class="btn btn-info">Edit</a>
                    &nbsp
                    <a href="/delete/<?=$mhs['NIM']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <a href="create">
        <button class="btn btn-primary">Tambah Data Mahasiswa</button>
    </a>

</body>


</table>

</html>

<?= $this->endSection(); ?>