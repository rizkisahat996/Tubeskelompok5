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
						New Password
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
                    <?php
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
						New Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

                    <div class="container-login100-form-btn">
					<span class="txt1 p-b-11">
						Confirm New Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="password" name="cpassword" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="change-password" value="Change">
                            Change
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>