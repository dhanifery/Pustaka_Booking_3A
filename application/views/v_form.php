<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Membuat Form Validation</title>
   </head>
   <body>
      <form action="<?=base_url('form/aksi');?>" method="post">
         <h1>Membuat Form Validation</h1>

         <!--form nama-->
         <label for="">Nama</label><br>
         <input type="text" name="nama" value=""><br>
         <strong><?php echo form_error("nama"); ?></strong>

         <!--form email-->
         <label for="">Email</label><br>
         <input type="text" name="email" value=""><br>
         <strong><?php echo form_error("email"); ?></strong>

         <!--form konfirmasi email-->
         <label for="">Konfirmasi Email</label><br>
         <input type="text" name="konfir_email" value=""><br>
         <strong><?php echo form_error("konfir_email"); ?></strong>

         <!--form submit-->
         <input type="submit" value="Simpan"><br>
      </form>
   </body>
</html>
