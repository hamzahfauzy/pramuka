<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Registrasi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= routeTo('assets/img/main-logo.png')?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?=routeTo('assets/js/plugin/webfont/webfont.min.js')?>"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?=routeTo('assets/css/fonts.min.css')?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?=routeTo('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=routeTo('assets/css/atlantis.min.css')?>">
</head>
<body style="min-height:auto;">
	<div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
                <div class="card full-height">
                    <?php if($success_msg): ?>
                    <div class="alert alert-success"><?=$success_msg?></div>
                    <?php endif ?>
    
                    <?php if($error_msg): ?>
                    <div class="alert alert-danger"><?=$error_msg?></div>
                    <?php endif ?>
                    <div class="card-body">
                        <center>
                            <img src="<?=routeTo('assets/img/main-logo.png')?>" width="150px" height="100px" alt="logo" style="object-fit:contain;">
                        </center>
                        <div class="card-title text-center">Registrasi</div>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" id="" class="form-control mb-2" placeholder="Nama Disini...">
                                <label for="">Kwartir Ranting</label>
                                <?= Form::input('options-obj:ranting,id,nama', 'ranting_id', ['class'=>"form-control mb-2","placeholder"=>'Kwartir Ranting']) ?>
                                <label for="">No. Gugus Depan</label>
                                <input type="text" name="gugus_depan" id="" class="form-control mb-2" placeholder="Nama Disini...">
                                <label for="">Nama Pengguna</label>
                                <input type="text" name="username" id="" class="form-control mb-2" placeholder="Nama Pengguna Disini...">
                                <label for="">Kata Sandi</label>
                                <input type="password" name="password" id="" class="form-control mb-2" placeholder="Kata Sandi Disini...">
                                <label for="">No. Handphone/WA</label>
                                <input type="text" name="no_hp" id="" class="form-control mb-2" placeholder="Nama Disini...">
                                <button class="btn btn-primary btn-block btn-round">Masuk</button>
                                <center>
                                    <p></p>
                                    <a href="<?=routeTo('auth/login')?>">Login</a>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>