<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url();?>assets/template/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url();?>assets/template/css/bootstrap.min.css" rel="stylesheet" />
    <title><?= $title;?></title>
    <style>
        #verif {
            margin-top:250px;
            text-align:center;
        }
    </style>
</head>

<body style="background-color:#077BFF;">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="verif">
                        <h2 class="text-white">Berhasil melakukan verifikasi akun</h2>
                        <br>
                        <a type="buttton" href="<?= base_url('login');?>" class="text-white" style="border-radius: 4px;">Login</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>    
</body>

</html>
