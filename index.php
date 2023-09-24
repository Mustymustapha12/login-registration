<?php
	include 'includes/header.php';


?>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/user.png" alt="User Login">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" style="text-align: center;">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="index.php">
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.php" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input" required>
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="login" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="register.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; <?php echo date("Y") ?> 
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include 'includes/footer.php';

	if(isset($_SESSION['status']) && $_SESSION['status'] != "") { ?>
		<script>
			swal({
				title: "<?php echo $_SESSION['status']; ?>",
				icon: "<?php echo $_SESSION['status_code']; ?>",
			});
		</script>
	<?php
	unset($_SESSION['status']);
	}
?>
