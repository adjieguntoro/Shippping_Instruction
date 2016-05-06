<?php
	include('head.php');
	?>
<div id="main-wrapper" class="wrapper ">
			<div class="admin-login-wrapper fnt-12">
				
					
				</div>
				
 							 

					<div class="area login">
					<div class="title-login">
					<h4>USER LOGIN</h4>

							<form action="<?php echo base_url('Login/masuk'); ?>" method="POST" role="form" class="">
								<div class="clearfix">
								Username / Email : <br/>
								</div>

								<input type="text" name="username"> <br/><br/>

								<div class="clearfix">
								Password : <br/>
								</div>
								<input type="password" name="password">



								<br/><br/>
								<div class="clearfix">
							
							<!-- <a style="color:#03266D" href="#"><b>Lupa Password?</b></a>
							 <br/><br/>-->
							</div>
								

								<button class="btn btn-primary" type="submit" value="LOG IN">Log In</button>
								<small><a class="btn btn-default" href="<?php echo base_url('Login/daftar');?>"> Create an Account..</a></small>
								<!-- <button class="btn btn-info" type="submit">Create an Account</button><br> -->
								<?php 
						if($this->session->flashdata('pesan') <> ''){
							?>
							<br><br>
					<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<?php echo $this->session->flashdata('pesan');?>

					</div>
					<?php
				}
				?>

							</form>
						</div>

					

				</div>

				</div>


<?php
	include('footer.php');
	?>