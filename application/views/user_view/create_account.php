<?php
	include('head.php');
	?>
<div id="main-wrapper" class="wrapper ">
			<div class="admin-login-wrapper fnt-12">
				
					
				</div>
					<div class="area-regist">
					<div class="title-login">
						<h4>CREATE AN ACCOUNT</h4>

							<form action="<?php echo base_url('Registration/Completed'); ?>" method="POST" role="form" class="form">
								<div class="form-group">
				                    <label for="First Name">FIRST NAME</label>
				                    <div class="input-group">
				                        <input type="text" class="form-control" name="first_name" id="inpufirstname" placeholder="Enter Your First Name" required>
				                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-user"></span></span>
				                    </div>
                				</div>

                				<div class="form-group">
				                    <label for="Last Name">LAST NAME</label>
				                    <div class="input-group">
				                        <input type="text" class="form-control" name="last_name" id="inputlastname" placeholder="Enter Your First Name" required>
				                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-user"></span></span>
				                    </div>
                				</div>

                				<div class="form-group">
				                    <label for="email">EMAIL</label>
				                    <div class="input-group">
				                        <input type="email" class="form-control" name="email" id="inputemail" placeholder="Enter Your Email" required>
				                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-envelope"></span></span>
				                    </div>
                				</div>

                				<div class="form-group">
				                    <label for="username">USERNAME</label>
				                    <div class="input-group">
				                        <input type="text" class="form-control" name="username" id="inputusername" placeholder="Enter Username" required>
				                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-user"></span></span>
				                    </div>
                				</div>

                				<div class="form-group">
				                    <label for="username">PASSWORD</label>
				                    <div class="input-group">
				                        <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Enter Password" required>
				                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-lock"></span></span>
				                    </div>
                				</div>

                				<button class="btn btn-info" type="submit">Create an Account</button>  
                				<small><a class="btn btn-default" href="<?php echo base_url('Login/login_page');?>"> Login</a></small>
							</form>
					</div>

					

				</div>

				</div>


<?php
	include('footer.php');
	?>