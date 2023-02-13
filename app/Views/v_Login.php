<section id="form-mahasiswa-store">
    
    <?php if (!empty(session()->getFlashdata('gagal'))){
        echo session()->getFlashdata('gagal');   
    }?>

    <?= form_open('/cek_login'); ?>
    <table>
    <tr>
        <td for="username" width="100">Username</td> 
        <td><input type="text" name="username" id="username" ></td>
    </tr>
    <tr>
        <td for="password" width="100">Password</td> 
        <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="simpan" ></td>
    </tr>
</table>
<?= form_close(); ?>
</section>