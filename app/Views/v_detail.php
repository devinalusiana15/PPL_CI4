<?= $this->extend('v_template'); ?>
<?= $this->section('content'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>DETAIL MAHASISWA</title>
</head>

<h3>Detail Mahasiswa</h3>
     <div class="content">
        <table class="table-form" border="0" width="20%" cellpadding="5" cellspacing="1">
            <tr>
                <td width="10%">NIM</td>
                <td width="1%">:</td>
                <td><?php echo $mahasiswa['NIM']; ?></td>
            </tr>
            <tr>
                <td width="10%">Nama</td>
                <td width="1%">:</td>
                <td><?php echo $mahasiswa['Nama']; ?></td>
            </tr>
            <tr>
                <td width="10%">Umur</td>
                <td width="1%">:</td>
                <td><?php echo $mahasiswa['Umur']; ?></td>
            </tr>
        </table>
    </div>
<a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
<?= $this->endsection();?>
