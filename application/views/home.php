<!DOCTYPE html>
<html>
	<head>
		<title>Shipping Request</title>
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
		<!---<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>-->
	</head>

	<body>
		<header>

		<div id="header">
			<div class="wrapper">

				<h1 id="logo">
	                <a href="http://www.kemendag.go.id/" title="Home">
	                <img src="<?php echo base_url();?>assets/images/logo.png" alt="Kemendag.go.id" width="113" height="120"></a>
	            </h1>

	            <div class="title-shipping">
	            <h4>SHIPPING INSTRUCTION</h4>
	            <div id="main-date">Rabu, 30 Maret 2016</div>
	            </div>
        	</div>
        </div>

		</header>

		<div id="main-wrapper" class="wrapper ">
		
			<div class="left-wraper fnt-12">
				<fieldset>
 							 <legend>Masuk</legend>

					<div class="area login">

							<form action="<?php echo base_url('Site/login');?>" method="post">
								<div class="clearfix">
								Username / Email : <br/>
								</div>

								<input type="text" name="username" id="username" required> <br/><br/>

								<div class="clearfix">
								Password : <br/>
								</div>
								<input type="password" name="username" id="username" id="username">



								<br/><br/>
								<div class="clearfix">
							
							 <a style="color:#03266D" href="#"><b>Lupa Password?</b></a>
							 <br/><br/>
							</div>
								

								<input class="submit" type="submit" value="LOG IN">


							</form>
						</div>

					</fieldset>

				</div>

				<div class="right-wraper fnt-12">
					<fieldset>
 							 <legend>Daftar</legend>

					<div class="area login">

							<form>
								<div class="clearfix">
								Username <br/>
								</div>

								<input > <br/><br/>

								<div class="clearfix">
								Email : <br/>
								</div>

								<input type="email"> <br/><br/>

								<div class="clearfix">
								Password : <br/>
								</div>
								<input type="password">



								<br/><br/>

								<div class="clearfix">
								Confirm Password : <br/>
								</div>
								<input type="password">



								<br/><br/>
								
								

								<input class="submit" type="submit" value="SIGN UP">


							</form>
						</div>

					</fieldset>
					
				</div>
			
		</div>



		<!---Footer Area-->

		<footer>

			<div class="footer">
			Kementerian Perdagangan Republik Indonesia<br/>
Jl. M. I. Ridwan Rais, No. 5, Jakarta Pusat 10110, Telepon (021) 3841961/62 <br/>
Copyright @ 2012 Pusat Hubungan Masyarakat dan Pusat Data dan Informasi Perdagangan


	</div>
</footer>


	</body>




</html>