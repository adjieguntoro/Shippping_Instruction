<?php
	include('head.php');

	?>
	<script type="text/javascript">
	$(document).ready(function(e) {
	 $('#submitreg').click(function() { 
	 	var femail = $('#femail').val();
	 	// Checking Empty Fields
	 	if ($.trim(femail).length == 0 || $("#fusername").val()=="" || $("#fpassword").val()=="") { 
	 		alert('All fields are mandatory'); 
	 		e.preventDefault(); 
	 	} 
	 	if (validateEmail(femail)) {
	 			alert('Nice!! your Email is valid, now you can continue..'); 
	 	} else { 
	 				alert('Invalid Email Address');
	 					e.preventDefault(); 
	 					} 
	 				}); 
	 			}); 
	 			// Function that validates email address through a regular expression.
	 			function validateEmail(femail) { 
	 				var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	 					if (filter.test(femail)) { 
	 						return true; 
	 					} else { 
	 						return false; 
	 					} 
	 				}

	</script>

		<div id="main-wrapper" class="wrapper ">
		
			
				<div class="center-panel fnt-12">
					<fieldset>
 							 <legend>Daftar</legend>

					<div class="area login">

							<form name="daftar" method="POST">
								<div class="clearfix">
								Username <br/>
								</div>
								<dv class="input-wrapper">
								<input onchange="return noError()"type="text" name="username" id="fusername"> <br/><br/>
								</dv>
								<div class="clearfix">
								Email : <br/>
								</div>

								<input type="text" name="email" id="femail"> <br/><br/>

								<div class="clearfix">
								Password : <br/>
								</div>
								<input type="password" name="password" id="fpassword">



								<br/><br/>

								<div class="clearfix">
								Confirm Password : <br/>
								</div>
								<input type="password" name="cpassword" id="cfpassword">



								<br/><br/>
								
								

								<input class="submit" id="submitreg" type="submit" value="SIGN UP">


							</form>
						</div>

					</fieldset>
					
				</div>
			
		</div>



		<!---Footer Area-->

		<?php
	include('footer.php');

	?>

	