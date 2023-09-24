<?php
	include "includes/header.php";

	session_start();


?>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/register.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" style="text-align: center;">Register</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="includes/config.php">
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="phone">Phone Number</label>
									<input id="phone" type="number" class="form-control" name="phone" required>
									<div class="invalid-feedback">
										Your phone number is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="address">Address</label>
									<textarea id="address" type="address" class="form-control" name="address" required></textarea>
									<div class="invalid-feedback">
										Your Address is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password1" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="form-group">
									<label for="password">Confirm Password</label>
									<input id="password" type="password" class="form-control" name="password2" required data-eye>
									<div class="invalid-feedback">
										Confirm Password is required
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="register" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="index.php">Login</a>
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