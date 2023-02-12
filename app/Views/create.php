
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
    <?= form_open('/mahasiswa/store'); ?>
    <div>
        <label for="NIM">NIM</label> <br>
        <input type="number" name="NIM" id="NIM" value="<?= set_value('NIM') ?>">
    </div>
    <div>
        <label for="Nama">Nama Mahasiswa</label> <br>
        <input type="text" name="Nama" id="Nama" value="<?= set_value('Nama') ?>">
    </div>
    <div>
        <label for="Umur">Umur</label> <br>
        <input type="number" name="Umur" id="Umur" value="<?= set_value('Umur') ?>">
    </div>
    <div>
        <a href="/mahasiswa">&laquo; Kembali</a>
        <input type="submit" name="simpan" value="Simpan">
    </div>
    <?= form_close(); ?>
</section>


