<?php
	include('head.php');
	?>
<div id="main-wrapper" class="wrapper">
	<?php
	include('main-menu.php');
	?>
			<div class="right-wraper fnt-12">
					
							<!--WELCOME TO SHIPPING INSTRUCTION WEB-->
						

						<div class="panel-wrapper panel panel-default">
							<div class="title-panel panel-heading">
								<h4>SHIPPIG HISTORY</h4>
							</div>
							<div class="panel-body">
								<table class="table table-striped table-hover">
									<tr>
										<th>No Track</th>
										<th>Request Date</th>
										<th>POL - POD</th>
										<th>Status</th>
										<th>View</th>
										<th>Download</th>
									</tr>
									<?php foreach ($data_request as $view_data) {
									?>

									
									<tr>

										<td><?php echo $view_data->request_id;?></td>
										<td><?php echo $view_data->etd;?></td>
										<td><?php echo $view_data->port_of_loading;?> -	 <?php echo $view_data->port_of_discharging;?></td>
										<td ><span class="label label-default"><?php echo $view_data->status;?></span></td>
										<td><a class="btn btn-xs btn-primary" href='<?php echo base_url('Site/details/');?>/<?php echo $view_data->request_id;?>' >Details</a></td>
										<td>

										<?php
											if ($view_data->status=='Approved') {


										echo "<a class='btn btn-xs btn-success' href='";
										echo base_url('si_doc_ok/');
										echo "/SI_";
										echo $view_data->request_id;
										echo ".pdf'><i class='glyphicon glyphicon-download'></i>  Download</a></td>";
										}	else {

										echo "<a disabled class='btn btn-xs btn-success' href='";
										echo base_url('si_doc_ok/');
										echo "/SI_";
										echo $view_data->request_id;
										echo "'><i class='glyphicon glyphicon-download'></i>  Download</a></td>";
										}
										?>	
																

									</tr>
									<?php
								}
								?>
								</table>


							</div>
				</div>


				</div>
			
		</div>

	<?php
	include('footer.php');
	?>