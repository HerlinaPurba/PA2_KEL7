<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Registrasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login-assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{route('registrasi-proses')}}" method="POST">
					@if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <span class="login100-form-title">
						Registrasi
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input autofocus class="input100
                        @error('name')
                            is-invalid
                        @enderror
                        " type="name" name="name" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "contoh: ex@abc.xyz">
						<input autofocus class="input100
                        @error('email')
                            is-invalid
                        @enderror
                        " type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100
                        @error('password')
                            is-invalid
                        @enderror
                        " type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="input-group mb-3 validate-input" data-validate = "Role is required">
                        <div class="input-group-prepend
						@error('role')
                            is-invalid
                        @enderror
						">
                          {{-- <label class="input-group-text" for="inputGroupSelect01"><b>Role</b> </label> --}}
                        </div>
					</div>
							<div>
								<select class="form-control" id="inputGroupSelect01" name="role">
								<option selected>Role...</option>
								<option value="admin">Admin</option>
								<option value="user">User</option>
								</select>
							</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Registrasi
						</button>
					</div>



					<div class="text-center p-t-136">
						<a class="txt2" href="login">
							Admin Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/bootstrap/js/popper.js"></script>
	<script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login-assets/js/main.js"></script>

</body>
</html>
