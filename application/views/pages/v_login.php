<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tugas Besar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tugas Besar Kami">
    <meta name="author" content="Punya Rikat & Wegi">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
    <style>
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
        body {
            padding-top: 70px;
            background-color: #3d579d;
            color: #fff;
        }
        a{
            color: #002166;
        }
        a:hover{
            text-decoration: none;
            color: #fff;
        }
        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: gold;
            border: 2px solid rgba(255,255,255,0.3);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
            color: #ffffff;
        }
        .form-signin:hover{
            border: 2px solid #fff;
        }
        .form-signin .form-signin-heading,
        .form-signin {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .text-center{
            text-align: center;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/borutosumire.jpg')?>">

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
</head>

<body>
<div class="container">

    <div class="loading navbar-fixed-top" style="display: none">
        <div class="progress progress-primary progress-striped active">
            <div class="bar" style="width: 100%;"></div>
        </div>
    </div>
    <div class="alert alert-info text-center">
        Level Admin= Username : rikat , Password : admin <br/>
        Level User= Username : wegi , Password : user
    </div>

    <br>
    <form class="form-signin" action="<?= site_url('login/cek_login')?>" method="post">
        <hr>
        <h4 class="form-signin-heading text-center">Pengoperasian Aplikasi Penjualan</h4>

            <!-- NOTIF -->
            <?php
            $message = $this->session->flashdata('notif');
            if($message){
                echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }?>

        <hr>
        <input type="text" class="input-block-level" placeholder="Username atau Email" name="username" required="">
        <input type="password" class="input-block-level" placeholder="Password" name="password" required="">
        <button class="btn btn-primary" type="submit">Masuk</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/login/register') ?>" class="btn btn-success">Registrasi</a>
    </form>
    <hr>
    <div class="footer">
        <p>&copy; dibuat oleh : <a href="http://facebook.com/rikatnanda" target="_blank"><strong>Rikat dan Wegi</strong></a></p>
    </div>
</div>
</body>

</html>
