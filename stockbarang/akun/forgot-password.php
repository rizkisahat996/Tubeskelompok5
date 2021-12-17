<?php
include "layout/header.php";
?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				
				<form class="login100-form validate-form flex-sb flex-w" action="forgot-password.php" method="POST" autocomplete="" >
					<span class="login100-form-title p-b-32">
						Forgot Password
					</span>
					<div class="container-login100-form-btn">
					<?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
					</div>

                    <div class="container-login100-form-btn">
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="check-email" value="Continue">
                            Continue
						</button>
					</div>
					<div class="mt-4 text-center">
						Don't have an account? <a href="signup-user.php">Sign Up</a>
					</div>

				</form>
			</div>
		</div>
	</div>
    
<?php
include "layout/footer.php";
?>