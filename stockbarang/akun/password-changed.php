<?php
include "layout/header.php";
?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
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
                        if(isset($_SESSION['info'])){
                            ?>
                            <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                            </div>
                            <?php
                        }
                        ?>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login-now" value="Login Now">
                            Login Now
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    
<?php
include "layout/footer.php";
?>