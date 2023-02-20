<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>

<h2>Edit Data Mahasiswa</h2>
<form action="<?= base_url("update/{$mahasiswa['NIM']}") ?>" method="post" align="center">
    <div>
        <label for="Nama">Nama:</label>
        <input type="text" name="Nama" id="Nama" value="<?= $mahasiswa['Nama'] ?>">
    </div>
    <div>
        <label for="Umur">Umur:</label>
        <input type="text" name="Umur" id="Umur" value="<?= $mahasiswa['Umur'] ?>">
    </div>
    <div>
        <input type="submit" value="Update">
    </div>
</form>

<?= $this->endSection(); ?>