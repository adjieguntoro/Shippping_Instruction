<?php
	include('head.php');
	?>

<?php
	header('refresh: 5; url=index'); // redirects the user instantaneously.
	#exit;
?>
<div id="main-wrapper" class="wrapper ">
			

					<div class="alert alert-success success">

						<h3> Thank You!</h3>

							<span><?php echo $message; ?></span> <br/>
							<p>You will be redirect to dashboard in 
							<span id="counter">5</span> second(s).</p> or <a href="dashboard">click here</a> if you not redirect.
						</div>

					

				</div>

				


<?php
	include('footer.php');
	?>


<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        //location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>