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

              <div class="tile-stats">
                <div class="icon"><i class="fa fa-group"></i>
                </div>
                <div class="count"><?php echo $row_user;  ?></div>

                <h3>Total Users</h3><br>
                
              </div>
            </div>
            </a>
            <a href="">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-folder"></i>
                </div>
                <div class="count"><?php echo $row_req;  ?></div>

                <h3>Total Request</h3><br>
              
              </div>
            </div>
            </a>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-anchor"></i>
                </div>
                <div class="count">50</div>

                <h3>Data Port</h3><br>
               
              </div>
            </div>
          <!--   <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i>
                </div>
                <div class="count">179</div>

                <h3>New Sign ups</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
              </div>
            </div>
          </div>
 -->



         <div class="row">
            <div class="col-md-4">
              <div class="x_panel">
                <div class="x_title">
                  <h2>New Users <!-- <small>Sessions</small> --></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <?php foreach ($data_users as $view_data) {
                    ?>
                 <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                    </a>
                    
                    <div class="media-body">
                      <p><b><?php echo $view_data->first_name;?></b></p>
                      <p><?php echo $view_data->company;?></p>
                      <p><?php echo $view_data->email;?></p>
                    </div>
                  </article>
                  <?php 
                }
                ?>
                  
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="x_panel">
                <div class="x_title">
                  <h2>New Request <!-- <small>Sessions</small> --></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                 
                   <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-folder aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith </a>
                      <small>PT. Polindo Bio Energi Pratama</small>
                      <p>Fak-Fak <i class="fa fa-arrows-h"></i> Tanjung Pasir</p>
                      <span class="label label-default">Pending</span>
                    </div>
                  </article>

                  <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-folder aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith </a>
                      <small>PT. Polindo Bio Energi Pratama</small>
                      <p>Fak-Fak <i class="fa fa-arrows-h"></i> Tanjung Pasir</p>
                      <span class="label label-danger">Pending</span>
                    </div>
                  </article>

                  <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-folder aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith </a>
                      <small>PT. Polindo Bio Energi Pratama</small>
                      <p>Fak-Fak <i class="fa fa-arrows-h"></i> Tanjung Pasir</p>
                      <span class="label label-default">Pending</span>
                    </div>
                  </article>

                  <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-folder aero"></i>
                          </a>
                    
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith </a>
                      <small>PT. Polindo Bio Energi Pratama</small>
                      <p>Fak-Fak <i class="fa fa-arrows-h"></i> Tanjung Pasir</p>
                      <span class="label label-danger">Pending</span>
                    </div>
                  </article>


                </div>
              </div>
            </div>

           <!--  <div class="col-md-4">
              <div class="x_panel">
                <div class="x_title">
                  <h2>New Users <small>Sessions</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                 <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith</a>
                      <p>PT. Polindo Bio Energi Pratama</p>
                      <p>12 Request</p>
                    </div>
                  </article>
                  <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith</a>
                      <p>PT. Polindo Bio Energi Pratama</p>
                      <p>12 Request</p>
                    </div>
                  </article>
                  <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith</a>
                      <p>PT. Polindo Bio Energi Pratama</p>
                      <p>12 Request</p>
                    </div>
                  </article>
                   <article class="media event">
                    <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                          </a>
                    </a>
                    <div class="media-body">
                      <a class="title" href="#">Jhon Smith</a>
                      <p>PT. Polindo Bio Energi Pratama</p>
                      <p>12 Request</p>
                    </div>
                  </article>
                  </div>
                </div>
              </div>
            </div> -->


            
          </div>
        </div>

      </div>
      </div>
      <!-- /page content -->

<?php 
include('footer.php');
?>
