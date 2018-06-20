<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugasku</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/a/bootstrap.min.css">
  </head>

  <body  align="center" class="text-center">
    <form border="2" align="center" class="form-signin" method="post" action="<?php echo base_url('index.php/login/register') ?>">
      <h1 class="h3 mb-3 font-weight-normal">Tolong Daftar</h1>
      <?php echo validation_errors(); ?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      <label for="nama" class="sr-only">Nama</label>
      <input type="nama" name="nama" id="nama" class="form-control" placeholder="Nama">

      <label for="email" class="sr-only">Email</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="Email">
      <select name="level" id="level" class="form-control" style="height: 45px;">
        <option value="admin">Admin</option>
        <option value="pegawai">Pegawai</option>
      </select><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>

    <a href="<?php echo base_url('index.php/login') ?>" class="btn btn-lg btn-danger btn-block">Kembali Login</a>
    </form>
    
  </body>
</html>
<style>
	html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: blue;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;

}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
  border : 3;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 2;
  border-bottom-left-radius: 2;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 2;
  border-top-right-radius: 2;
}
</style>