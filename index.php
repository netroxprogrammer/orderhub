<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Orderhub </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#53B9F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
                                            
        <section class="login_content">
          <div class="x_content bs-example-popovers">

                <script type="text/javascript">

function login(){

var  Username = document.getElementById("Username").value;
var password = document.getElementById("Password").value;

if(Username=="jhon" && password=="jhon"){
  window.location="main.php?Username"+Username;
}
else{
  document.getElementById("err").style.display = 'block';  
  document.getElementById("error").innerHTML="User Not Found"; 
}
}

</script>
                
              </div>
            <h1><font color="white"><i class="fa fa-paw">&nbsp;&nbsp;&nbsp;OrderHub</font></i></h1>
           
<div class="alert alert-danger alert-dismissible fade in" style="display: none;" id="err"  role="alert">
                  <button type="button" class="close"  data-dismiss="alert"  aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong id="error"></strong> 
                </div>


           <div class="input-group">
               <input type="email" id="Username" class="form-control"  required placeholder="Email"/>
               <span class="input-group-addon">
               <i class="fa fa-envelope"></i>
               </span>
                         </div>
           <font color="red"> <p id="name"></p></font>
            <div class="input-group">
               <input type="password" id="Password" placeholder="Password" class="form-control" required/>
               <span class="input-group-addon">
               <i class="fa fa-key"></i>
               </span>
          </div>
           <font color="red"> <p id="pass"></p></font>
            <div>
              <br>
              <button class="btn btn-success btn-block submit " onclick="login()"> Login</button>
             
            
            </div>
            <div class="clearfix"></div>
          
        
          <!-- form -->
        </section>
        <!-- content -->
      
      
    </div>
  </div>
<script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <!-- PNotify -->
  <script type="text/javascript" src="js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.nonblock.js"></script>

</body>

</html>
