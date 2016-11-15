<?php  include_once 'header.php';  ?>

  <div class="top_nav">

       
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="x_panel ">
                        <div class="x_title">
                         
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            
                            
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                                               
                        <div class="x_content">

                          <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                            <canvas id="canvas_line1" height="5"></canvas>
                          </div>
                          <div>
                          </div>
                         
                            <h3>All Orders</h3>  
                            <table class="table table-striped responsive-utilities jambo_table bulk_action">
                     <tbody>
                      <tr class="success">
                       
                        <td class=" "><div class="form-group">
  <label for="sel1">Orders</label>
  <select class="form-control" id="sel1">
    <option>All Time</option>
    <option>one Day</option>
    <option>Today</option>
    <option>last 7 days</option>
  </select>
</div></td>
                        <td class=" "> <div class="form-group">
  <label for="sel1">Select</label>
  <select class="form-control" id="sel1">
    <option>All</option>
    <option>one Day</option>
    <option>Today</option>
    <option>last 7 days</option>
  </select>
</div></td>
                        <td class=" "><div class=" form-group top_search">
            <br>  <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>

                </div>
              
              </div></td>

                        <td class=" "><br><div class="form-group">
          <select class="selectpicker" multiple data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
            <optgroup label="">
              <option>Country</option>
              <option>Total</option>
              <option>Currency</option>
              
            </optgroup>
           
          </select>
        </div></td>
        <td>  <br><button type="button" class="btn btn-round btn-default">Apply Filter</button></td>
                       <td> <br><button type="button" class="btn btn-round btn-default">Clear</button></td>
                        <td> <br> <button type="button" class="btn btn-round btn-default">Save</button></td>
                      </tr>
                      
                    </tbody>
</table>
                          
      
<br>



            </div>
                       </div>
                      </div>
                      <div class="col-xs-1"> 
                        <select class="form-control" id="sel1">
    <option>invoice</option>
    <option>one Day</option>
    <option>Today</option>
    <option>last 7 days</option>
  </select>
                       </div>
                        <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Pick List</button>
                       </div>
                       <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;Dispatch</button>
                       </div>
                        <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-train"></i>&nbsp;&nbsp;Courler</button>
                       </div>
                       <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-download"></i>&nbsp;&nbsp;ToCSV</button>
                       </div>
                        <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-tag"></i>&nbsp;&nbsp;Tag</button>
                       </div>
                        <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-clipboard"></i>&nbsp;&nbsp;Batch</button>
                       </div>
                        <div class="col-xs-1"> 
           <button type="button" class="btn btn-default"><i class="fa fa-archive"></i>&nbsp;&nbsp;Archive</button>
                       </div>
  <table class="table table-striped responsive-utilities jambo_table bulk_action">
    <thead>
      <tr> 
        <th><input type="checkbox" id="check-all" class="flat">
                        </th>
                        <td>Channel</td>
                        <td>Account</td>
                        <td>Ordered</td>
                        <td >Order ID / Product Information</td>
                        <td>Total</td>
                        <td>Buyer</td>
                        <td>Status</td>
                        <td>Batch</td>
                        <td>Messages</td>
                        <td>Gift</td>
                        <td>Shipping</td>
                        <td>Tag</td>
                        <td>Inv</td>

                      </tr>
    </thead>
                    <tbody>
                     <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" "><img src="ebay.png" ></td>
                        <td class=" "><a href="" class="btn btn-link">busybeesdeal</a> </td>
                        <td class=" ">05/11/2016</td>
                        <td ><a href="" class="btn btn-link">15:30</a><br>
                          1 x (Roller 4PCS) - Four(4) Compatible Velevet Smmpooth Experess Pedi Refill
                          Replacement
                        </td>
                        <td class=" ">€3.43</td>
                        <td class="a-right a-right "><a href="" class="btn btn-link"><small>Jean Carter <br> (Jetsetterjen80)</small></a></td>
                        <td class=""><button type="button" class="btn btn-success btn-xs">&nbsp; &nbsp; &nbsp; New&nbsp; &nbsp; &nbsp; </button></td>
                        <td></td>
                        <td><i class="fa fa-envelope"></i></td>
                         <td><i class="fa fa-gift"></i></td>
                          <td>UK_RoyalMail48</td>
                          <td></td>
                          <td>26</td>
                      </tr>
                      <tr class="even pointer">
                       <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" "><img src="ebay.png" ></td>
                        <td class=" "><a href="" class="btn btn-link">busybeesdeal</a> </td>
                        <td class=" ">05/11/2016</td>
                        <td ><a href="" class="btn btn-link">15:30</a><br>
                          1 x (Roller 4PCS) - Four(4) Compatible Velevet Smmpooth Experess Pedi Refill
                          Replacement
                        </td>
                        <td class=" ">€3.43</td>
                        <td class="a-right a-right "><a href="" class="btn btn-link"><small>Jean Carter <br> (Jetsetterjen80)</small></a></td>
                        <td class=""><button type="button" class="btn btn-primary btn-xs">&nbsp; &nbsp; &nbsp; New&nbsp; &nbsp; &nbsp; </button></td>
                        <td></td>
                        <td><i class="fa fa-envelope"></i></td>
                         <td><i class="fa fa-gift"></i></td>
                          <td>UK_RoyalMail48</td>
                          <td></td>
                          <td>26</td>
                      </tr>
                      <tr class="even pointer">
                       <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" "><img src="ebay.png" ></td>
                        <td class=" "><a href="" class="btn btn-link">busybeesdeal</a> </td>
                        <td class=" ">05/11/2016</td>
                        <td ><a href="" class="btn btn-link">15:30</a><br>
                          1 x (Roller 4PCS) - Four(4) Compatible Velevet Smmpooth Experess Pedi Refill
                          Replacement
                        </td>
                        <td class=" ">€3.43</td>
                        <td class="a-right a-right "><a href="" class="btn btn-link"><small>Jean Carter <br> (Jetsetterjen80)</small></a></td>
                        <td class=""><button type="button" class="btn btn-primary btn-xs">&nbsp; &nbsp; &nbsp; New&nbsp; &nbsp; &nbsp; </button></td>
                        <td></td>
                        <td><i class="fa fa-envelope"></i></td>
                         <td><i class="fa fa-gift"></i></td>
                          <td>UK_RoyalMail48</td>
                          <td></td>
                          <td>26</td>
                      </tr>
                    </tbody>
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