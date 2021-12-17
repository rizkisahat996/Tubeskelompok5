<?php
include "layout/header.php";
?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				
				<form class="login100-form validate-form flex-sb flex-w" action="forgot-password.php" method="POST" autocomplete="" >
					<span class="login100-form-title p-b-32">
						Code Verification
					</span>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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

                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
					</div>

                    <div class="container-login100-form-btn">
					<span class="txt1 p-b-11">
						Code Verification
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="number" name="otp"  >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="check-reset-otp" value="Submit">
                            Continue
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    
<?php
include "layout/footer.php";
?>