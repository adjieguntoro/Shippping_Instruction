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
							<div class="panel-heading">
								<h4>NEW REQUEST</h4>
							</div>

							<div class="container">
    <div class="row">
        <form role="form" action="<?php echo base_url('Site/send_request');?>" method="POST" ><br>	
        
            <div class="col-lg-5">
                <div class="form-group">
                    <label for="shhipper">SHIPPER NAME</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="shipper" id="inputShipper" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cosignee">COSIGNEE NAME</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputCosignee" name="cosignee" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">NOTIFY PARTY</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="inputnotify_party" name="notify_party" placeholder="Notify Party" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-th-large"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">DESCRIPTION OF CARGO</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputdescription_of_cargo" name="description_of_cargo" placeholder="Description of Cargo" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-bookmark"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">GROSS WEIGHT</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="inputdgross_weight" name="gross_weight" placeholder="Gross Weight" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-bookmark"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="notify_party">PORT OF LOADING</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputport_of_loading" name="port_of_loading" placeholder="Port of Loading" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">PORT OF DISCHARGING</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputport_of_discharging" name="port_of_discharging" placeholder="Port of Discharging" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">VESSEL NAME</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputvessel_name" name="vessel_name" placeholder="Vessel Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-exclamation-sign"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="notify_party">ESTIMATION TRUCK DATE</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="inputetd" name="etd" placeholder="Estimation Truck Date" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
               
                <div class="form-group">
                          <label for="term">TERM</label>
                          <select class="form-control" id="term" name="term">
                            <!-- <option >Select Term...</option> -->
                            <option value="CY-CY">CY-CY</option>
                            <option value="Port-Port">Port-Port</option>
                            <option value="Door-Door">Door-Door</option>
                            
                          </select>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Term :</b></div>
                         <div class="panel-body">

                            <p>CY-CY : <br>
                             Menerima dan menyerahkan Barang/Container di Lapangan Penumpukan Pelabuhan.
                             <p>Port- Port : <br>
                             Menerima dan menyerahkan Barang/Container di sisi Kapal/Dermaga Pelabuhan.
                             <p>Door - Door : <br>
                             Menerima dan menyerahkan Barang/Container di Gudang Pengirim/Penerima.


                         </div>
                </div>
                <div class="form-group">
                    <label for="notify_party">REMARKS & SPECIAL INSTRUCTION</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputremark_special" name="remark_special" placeholder="REMARKS & SPECIAL INSTRUCTION" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-bookmark"></span></span>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="InputMessage">NOTE (opsional)</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="3" ></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                    </div>
                </div> -->
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-left"><br><br><br>
            </div>
             <br><br>
              <br><br>.
        </form>
       
    </div>
</div>
							
						</div>
			</div>
</div>

		<?php
	include('footer.php');
	?>