<?php
include "layout/header.php";
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				
				<form class="login100-form validate-form flex-sb flex-w"  action="signup-user.php" method="POST" autocomplete="" >
					<span class="login100-form-title p-b-32">
						Sign Up
					</span>

                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <br>
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
                    <span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

                    <span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

                    <span class="txt1 p-b-11">
                        Confirm Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Password is required">
						<input class="input100" type="password" name="cpassword" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signup" value="Signup">
                            Sign Up
						</button>
					</div>
					<div class="mt-4 text-center">
						Already have an account? <a href="login-user.php">Login here!</a>
					</div>

				</form>
			</div>
		</div>
	</div>

    
<?php
include "layout/footer.php";
?>