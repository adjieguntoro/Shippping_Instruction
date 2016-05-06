<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo base_url();?>assets/backend/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/backend/css/animate.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

    	
    	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" href="../assets/css/admin/style.css">

    
    
    
  </head>

  <body>

    <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h2>ADMIN LOGIN</h2>
			</div>

			<div class="login-form">
				<form action="act_login" method="POST">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" name="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" name="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<button type="submit" value="login" class="btn btn-primary btn-large btn-block" >LOG IN</button>
				<!-- <a class="login-link" href="#">Lost your password?</a> -->
			</div>

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
</body>
    
    
    
    
    
  </body>
</html>
