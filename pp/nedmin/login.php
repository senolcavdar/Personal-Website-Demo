<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Bootstrap -->
	<link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
	<title>Proje Planlama</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/yason.jpg');">
			<div class="wrap-login100">
				<form method="POST" action="./process.php" class="login100-form validate-form">
					
				<?php if(@$_GET['status'] == 'ok'){?>

<div class="alert alert-success alert-dismissible fade in" role="alert"  style="font-size: 15px; width: 400px; " >
		<strong>Tebrikler!
		<i> <?php echo $user = @$_GET['user_name']?></i>  !</strong>   Başarılı bir şekilde kayıt oldunuz. 
		<button type="button" style="margin-top: -18px ;"   class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
		</button>
</div>
<?php }elseif($_GET['login'] == 'no') { ?>
	<div class="alert alert-danger alert-dismissible fade in" role="alert"  style="font-size: 15px; width: 400px; " >
		<strong>Hata!
		<i> <?php echo $user = @$_GET['user_name']?></i>  !</strong>   Girilen bilgiler yanlış.
		<button type="button" style="margin-top: -18px ;"   class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
		</button>
</div>
<?php }elseif($_GET['logout'] == 'ok') { ?>
	<div class="alert alert-warning alert-dismissible fade in" role="alert"  style="font-size: 15px; width: 400px; " >
		<strong>Çıkış Yapıldı!
		<i> <?php echo $user = @$_GET['user_name']?></i>  !</strong>   Başarılı şekilde çıkış yapıldı.
		<button type="button" style="margin-top: -18px ;"   class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
		</button>
</div>
<?php } ?>
					<span class="login100-form-title p-b-34 p-t-27">
						Giriş Yap
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="user_name" placeholder="Kullanıcı Adı">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Şifre">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Giriş
						</button>
					</div>

					<?php $control = $db->prepare("SELECT * FROM user ");
        $control->execute();
        $has_admin = $control->rowCount();
        if($has_admin == 0) {?>
					<div class="text-center p-t-20">
						<a class="txt1" href="register.php">
							Kayıt Ol
						</a>
					</div><?php } ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
<!-- jQuery -->
<script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</html>