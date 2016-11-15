<?php  include_once 'header.php';  ?>

<!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 Jhon
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

               <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">1</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                     
                      <span>
                                        <span>Amazon</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        You Got New Order
                                    </span>
                    </a>
                  </li>
                
                  
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
         <div class="">

          <div class="x_panel ">
            <form class="form">
                     <h3>   Filter User </h3>
                      <div class="col-md-12">
                        <div class="form-group col-xs-3">
                           Email
                          <input type="email"class="form-control"  name="email" />
                        </div><br><br><br><br>
                          <input type="submit" name="flterUser" value="Filter User" class="btn  btn-default" />
                           <input type="submit" name="resetFilter" value="Reset Filter" class="btn  btn-default" />
                  
                             <div class="x_title"></div>
                             <div class="col-md-12 col-md-offset-8">
 <input type="submit" name="resetFilter" value="Create New Users" class="btn  btn-default" />
                  

                             </div>
<div class="">
 <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       
                        <th class="column-title">Name </th>
                        <th class="column-title">Email Address</th>
                        <th class="column-title">Action</th>
                        
                        
                    </thead>

                    <tbody>
                      <tr class="even pointer">
                       
                        <td class=" ">Rajendiran</td>
                        <td class=" ">Test@gmail.com</td>
                        <td class=" ">
                          <a href="" class="btn btn-primary btn-xs">Manage</a>
                          <a href="" class="btn btn-danger btn-xs">Delete</a></td>

</tbody></table>
</div>
                 </form>

                       </div>
                    
                       </div>

                       
        <!-- footer content -->
       
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
