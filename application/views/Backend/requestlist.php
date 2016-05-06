
<?php
  include('navigation.php');
  ?>
      <!-- page content -->
      <div class="right_col" role="main">

        <br />
        <div class="">
        <a href="">
          <div class="row top_tiles"> 
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

              
            </div>
            </a>
       
         <div class="col-md-12 col-sm-12 col-xs-12">    <h2>Request List <!-- <small>Users</small> --></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Request ID</th>
                        <th>Shipper Name</th>
                        <th>Cosignee Name</th>
                        <th>Port</th>
                        <th>Description of Cargo</th>
                        <th>Gross Weight</th>
                       <th>Estimation Trucking Date</th>
                       <td>Status</td>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($data_request as $view_data) {
				?>
                      <tr>
                        <td><a class="badge bg-blue" href="<?php echo base_url('Backend/details/');?>/<?php echo $view_data->request_id;?>"><b><i class="fa fa-eye"></i> #<?php echo $view_data->request_id;?></b></a></td>
						<td><?php echo $view_data->shipper;?></td>
                        <td><?php echo $view_data->cosignee;?></td>
                        <td><?php echo $view_data->port_of_loading;?> 
                        	<i class="fa fa-arrows-h"></i> 
                        	<?php echo $view_data->port_of_discharging;?> <d>
                         <td><?php echo $view_data->description_of_cargo;?></td>
                        <td><span class="badge bg-green "><?php echo $view_data->gross_weight;?> Ton</span></td>
                        <td><?php echo $view_data->etd;?></td>
                        <td><span class="label label-default"> <?php echo $view_data->status;?></span></td>
                        
                        <td>
                        <?php 
                        $status=$view_data->status;
                        // echo $status;
                        
                        if ($status=='pending' )
                        {
                          echo "<a href='".base_url()."review/$view_data->request_id' class='btn btn-xs btn-danger'> Review</a> ";

                              // echo "<a href='".base_url()."reject/$view_data->request_id' class='btn btn-xs btn-danger'> Reject</a> ";

                      }else if ($status=='Review'){
                       echo "<a href='".base_url()."approve/$view_data->request_id' class='btn btn-xs btn-primary'> Approve</a> ";
                       echo "or <a href='".base_url()."reject/$view_data->request_id' class='btn btn-xs btn-danger'> Reject</a> ";

                        } else if ($status=="Rejected"){
                             echo "<a href='".base_url()."approve/$view_data->request_id' class='btn btn-xs btn-primary'> Approve</a> ";


                        } 
                        else {
                             echo "<a href='".base_url()."send_pdf/$view_data->request_id' class='btn btn-xs btn-success'> Send PDF</a> ";


                        }
                      ?>
                        	<!-- <a href=<?php base_url(); echo 'review/'; echo $view_data->request_id;?> class="btn btn-primary btn-xs" ><span class="fa fa-eye"></span> Review</a><br>
                        	<a href="#" class="btn btn-info btn-xs" ><span class="fa fa-check"></span>  Approve</a>
                        	<a href="#" class="btn btn-danger btn-xs" ><span class="fa fa-times-circle"></span > Reject </a> -->
                        </td>

                        


                      </tr>
              		<?php
								}
						?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      </div>
      <!-- /page content -->

       <!-- Datatables-->
        <script src="../assets/Backend/js/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/Backend/js/datatables/dataTables.bootstrap.js"></script>
         <script src="../assets/Backend/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="../assets/Backend/js/datatables/jszip.min.js"></script>
        <script src="../assets/Backend/js/datatables/pdfmake.min.js"></script>
        <script src="../assets/Backend/js/datatables/vfs_fonts.js"></script>
        <script src="../assets/Backend/js/datatables/buttons.html5.min.js"></script>
        <script src="../assets/Backend/js/datatables/buttons.print.min.js"></script>
        <script src="../assets/Backend/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/Backend/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="../assets/Backend/js/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/Backend/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="../assets/Backend/js/datatables/dataTables.scroller.min.js"></script>
        
        <!-- pace -->
        <script src="../assets/Backend/js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

<?php 
include('footer.php');
?>
