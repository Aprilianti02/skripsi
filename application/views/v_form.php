<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan codeigniter | skrispi.com</title>
</head>
<body>
    <form><h1>Membuat Form Validation dengan Codeigniter</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_error('nama'); ?>
	<?php echo form_error('email'); ?>
	<?php echo form_error('konfir_email'); ?>
    <?php echo form_open('form/aksi'); ?>
          <label>Nama</label><br/>
          <input type="text" name="nama" required=""><br/>
          <label>Email</label><br/>
          <input type="text" name="email"><br/>
          <label>Konfirmasi Email</label><br/>
          <input type="text" name="konfir_email"><br/>
          <input type="submit" value="Simpan">
</form>
</body>
</html>