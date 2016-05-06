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
       
         <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User List <!-- <small>Users</small> --></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
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
                    </thead>
                    <tbody>
                    <?php foreach ($data_request as $view_data) {
                    ?>
                      <tr>
                        <td><b>#<?php echo $view_data->user_id;?></td>
                        <td><?php echo $view_data->first_name; echo ' ' ;echo $view_data->last_name;?></td>
                        <td><?php echo $view_data->email;?></td>
                        <td><?php echo $view_data->company;?></td>
                        <td>Jl. Dahlia Lestari, Lebak Bulus - Jakarta Selatan</td>
                        <td>0217444453<d>
                        <td><span class="badge bg-green ">12 Request</span></td>
                        <td><a href="#" class="btn btn-danger btn-xs" ><i class="fa fa-times-circle"></i>  Delete</td>
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
