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
						<?php foreach ($data_request as $view_data) {
									?>
							<div class="title-panel panel-heading">
								<h4>REQUEST ID : <b>#<?php echo $view_data->request_id;?></b></h4><span class="label label-default"><i><?php echo $view_data->status;?></i></span>
							</div>
							<div class="panel-body">
								<table class="table table-striped table-hover">
									<!-- <tr>
										<th>No Track</th>
										<th>Request Date</th>
										<th>POL - POD</th>
										<th>Status</th>
										<th>View</th>
									</tr> -->
									
									<tr>

										<td>Shipper </td>
										<td>: <?php echo $view_data->shipper;?></td>
										
									</tr>
									<tr>

										<td>Cosignee </td>
										<td>: <?php echo $view_data->cosignee;?></td>
										
									</tr>
	<tr>

										<td>Notify Party </td>
										<td>: <?php echo $view_data->notify_party;?></td>
										
									</tr>
									<tr>

										<td>Description of Cargo </td>
										<td>: <?php echo $view_data->description_of_cargo;?></td>
										
									</tr>
									<tr>

										<td>Gross Weight </td>
										<td>: <?php echo $view_data->gross_weight;?></td>
										
									</tr>
									<tr>

										<td>Port of Loading </td>
										<td>: <?php echo $view_data->port_of_loading;?></td>
										
									</tr>
									<tr>

										<td>Port of discharging  </td>
										<td>: <?php echo $view_data->port_of_discharging;?></td>
										
									</tr>
									<tr>

										<td>Vessel Name  </td>
										<td>: <?php echo $view_data->vessel_name;?></td>
										
									</tr>
									<tr>

										<td>Estimation Trucking Date </td>
										<td>: <?php echo $view_data->etd;?></td>
										
									</tr>

									<tr>

										<td>Term  </td>
										<td>: <?php echo $view_data->term;?></td>
										
									</tr>
									<tr>

										<td>Remark & Special Instruction</td>
										<td>: <?php echo $view_data->remark_special;?></td>
										
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