<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Informasi Pengarsipan Surat | Bidang Irigasi PU SDA Jawa Timur</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/irigasi.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php
    if(isset( $_GET['aksi'])){

      $aksi = $_GET['aksi'];
      
      if (  $aksi == "login"){ //if pencet tombol login

        require_once "koneksi.php";

        $username = $_POST['username'];
        $password  = $_POST['password'];

        if(empty($username) && empty($password)){
        	echo "  <div class='alert alert-danger'> Masukkan Username dan Password!</div>";
        }

        else if(empty($username)){ //cek username diisi/tidak
        	echo "  <div class='alert alert-danger'> Masukkan Username!</div>";
        }

        else{ //if username diisi
        
        	if(empty($password)){ //cek password diisi/tidak
        		echo "  <div class='alert alert-danger'> Masukkan Password!</div>";
        	}

        	else{ //if  userpass diisi semua

        		$sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
        		$cek = mysqli_query($db, $sql);

        		$num = mysqli_num_rows($cek);
        			
        			if ($num==1){ //ada di db
          				$user = mysqli_fetch_array($cek,MYSQLI_ASSOC);
          				$_SESSION['username'] = $user['username'];
          				$_SESSION['id_role'] = $user['id_role'];
          				$_SESSION['nama'] = $user['nama'];
          		
          				if ($_SESSION['id_role']==1){
            				header("location: index.php?page=home");
            			}
            			else if($_SESSION['id_role']==2){
            					header("location: user/index.php");
            			}
                		else{
                				header("location: login.php");
                		}
                	}

                	else{ //tidak ada di db
          				echo "  <div class='alert alert-danger'> Username Atau Password Salah. Masukkan Username dan Password yang Benar!</div>";
       				} //tutup else userpass salah
    			
    			} //tutup else tidak kosong semua
        	
        	} //tutup else username tidak kosong
      	
      	} //tutup if get aksi
    
    } //tutup if isset aksi

    ?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/background2.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login.php?aksi=login">
					<span class="login100-form-logo">
						<image src="images/irigasi3.png" width="160px">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sistem Informasi Pengarsipan Surat
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							MASUK
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>