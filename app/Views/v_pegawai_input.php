<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>

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
    <?= form_open('/storepegawai'); ?>
    <table>
    <tr>
        <td for="nim" width="100">NIM</td>
        <td><input type="number" name="nim" id="nim" value="<?= set_value('nim') ?>"></td>
    </tr>
    <tr>
        <td for="nama" width="100">Nama</td> 
        <td><input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>"></td>
    </tr>
    <tr>
        <td for="gender">Gender:</td>
        <td for="gender-male">Pria
        <input type="radio" name="gender" value="Pria" id="gender-male" <?= set_radio('gender', 'Pria') ?>></td>
        <td for="gender-female">Wanita
        <input type="radio" name="gender" value="Wanita" id="gender-female" <?= set_radio('gender', 'Wanita') ?>></td>
    </tr>
    <tr>
        <td for="telp" width="100">Telp</td> 
        <td><input type="number" name="telp" id="telp" value="<?= set_value('telp') ?>"></td>
    </tr>
    <tr>
        <td for="email" width="100">Email</td> 
        <td><input type="text" name="email" id="email" value="<?= set_value('email') ?>"></td>
    </tr>
    <tr>
        <td for="pendidikan">Pendidikan:</td>
        <td><select name="pendidikan" id="pendidikan">
            <option value="">-- Pilih Pendidikan --</option>
            <option value="SD" <?= set_select('pendidikan', 'SD') ?>>SD</option>
            <option value="SMP" <?= set_select('pendidikan', 'SMP') ?>>SMP</option>
            <option value="SMA" <?= set_select('pendidikan', 'SMA') ?>>SMA</option>
        </select></td>
    </tr>   
    <tr>
        <td><a href="/pegawai">&laquo; Kembali</a></td>
        <td><input type="submit" name="simpan" value="Simpan"></td>
    </tr>
</table>
<?= form_close(); ?>
</section>

<?= $this->endSection(); ?>