<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<section id="form-mahasiswa-store">
    <?php
    if (isset($errors)) {
        echo '<div style="width: 300px"; border-radius: 5px; >';
        echo '<ul style="background-color: red; color: white; padding: 10px;">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>
    <?= form_open('/store'); ?>
    <table>
    <tr>
        <td for="NIM" width="100">NIM</td>
        <td><input type="number" name="NIM" id="NIM" value="<?= set_value('NIM') ?>"></td>
    </tr>
    <tr>
        <td for="Nama" width="100">Nama Mahasiswa</td> 
        <td><input type="text" name="Nama" id="Nama" value="<?= set_value('Nama') ?>"></td>
    </tr>
    <tr>
        <td for="Umur" width="100">Umur</td> 
        <td><input type="number" name="Umur" id="Umur" value="<?= set_value('Umur') ?>"></td>
    </tr>
    <tr>
        <td><a href="/mahasiswa" class="btn btn-secondary"> Kembali</a></td>
        <td><input type="submit" name="simpan" value="Simpan" class="btn btn-success"></td>
    </tr>
</table>
<?= form_close(); ?>
</section>

<?= $this->endSection(); ?>