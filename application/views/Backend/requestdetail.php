<?php
  include('head.php');
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
       
         <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                 <?php foreach ($data_request as $view_data) {
                    ?>
                  <h2>Request ID : <b>#<?php echo $view_data->request_id;?></b> <!-- <small>Users</small> --></h2>
                    <span class="badge bg-white"><?php echo $view_data->status;   ?></span>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable" class="table">
                    <!-- <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Total Request</th>
                        <th>Action</th>
                      </tr>
                    </thead> -->
                    <tbody>
                   
                    
                    <tr>
                        <td class="col-md-3"> <b>SHIPPER</b></td>
                        <td><?php echo $view_data->shipper;   ?></td>
                      </tr>

                       <tr>
                        <td class="col-md-2"> <b>COSIGNEE</b></td>
                        <td ><?php echo $view_data->cosignee;   ?></td>
                      </tr>

                       <tr>
                        <td class="col-md-2"> <b>NOTIFY PARTY</b></td>
                        <td><?php echo $view_data->notify_party;   ?> Container</td>
                      </tr>

                      <tr>
                        <td > <b>DESCRIPTION OF CARGO</b></td>
                        <td><?php echo $view_data->description_of_cargo;   ?></td>
                      </tr>

                       <tr>
                        <td > <b>GROSS WEIGHT</b></td>
                        <td><?php echo $view_data->gross_weight;   ?> Ton</td>
                      </tr>
                    
                      <tr>
                        <td > <b>PORT OF LOADING</b></td>
                        <td><?php echo $view_data->port_of_loading;   ?> </td>
                      </tr>

                      <tr>
                        <td > <b>PORT OF DISCHARGING</b></td>
                        <td><?php echo $view_data->port_of_discharging;   ?> </td>
                      </tr>

                      <tr>
                        <td > <b>VESSEL NAME</b></td>
                        <td><?php echo $view_data->vessel_name;   ?></td>
                      </tr>

                      <tr>
                        <td > <b>ETD</b></td>
                        <td><?php echo $view_data->etd;   ?></td>
                      </tr>

                      <tr>
                        <td > <b>TERM</b></td>
                        <td><?php echo $view_data->term;   ?> </td>
                      </tr>

                      <tr>
                        <td > <b>REMARK & SPECIAL INSTRUCTION</b></td>
                        <td><?php echo $view_data->remark_special;   ?> </td>
                      </tr>

                      <tr>
                        <td > <b>ACTION FOR THIS REQUEST</b></td>
                        <td>
                        <?php 
                        $status=$view_data->status;
                        // echo $status;
                        
                        if ($status=='pending' )
                        {
                          echo "<a href='".base_url()."review/$view_data->request_id' class='btn btn-xs btn-info'> Review</a> ";

                              // echo "<a href='".base_url()."reject/$view_data->request_id' class='btn btn-xs btn-danger'> Reject</a> ";

                      }else if ($status=='Review'){
                       echo "<a href='".base_url()."approve/$view_data->request_id' class='btn btn-xs btn-info'> Approve</a> ";
                       echo "or <a href='".base_url()."reject/$view_data->request_id' class='btn btn-xs btn-danger'> Reject</a> ";

                        } else if ($status=="Rejected"){
                             echo "<a href='".base_url()."approve/$view_data->request_id' class='btn btn-xs btn-info'> Approve</a> ";


                        } 
                        else {
                             echo "<a href='".base_url()."approve/$view_data->request_id' disabled class='btn btn-xs btn-info'> Approve</a> ";
                             echo "<a href='".base_url()."approve/$view_data->request_id'  class='btn btn-xs btn-info'> Send Document</a> ";


                        }
                      ?>
                        
                      </tr>


                     <!-- <ul class="list-group">
                      <li class="list-group-item"><b>Shipper</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $view_data->shipper;   ?></li>

                        <li class="list-group-item"><b>Cosignee</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $view_data->cosignee;   ?></li>

                        <li class="list-group-item"><b>Notify Party</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $view_data->notify_party;   ?></li>

                        <li class="list-group-item"><b>Cosignee</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $view_data->cosignee;   ?></li>
                      
                    </ul> -->



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
