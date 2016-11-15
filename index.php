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
<script type="text/javascript">
function login(){
var  Username = document.getElementById("Username").value;
var password = document.getElementById("Password").value;
if(Username==""){

document.getElementById("Username").value="Please Enter Email";

}
if(password==""){

}
if(Username=="jhon" && password=="jhon"){
  window.location="main.php?Username"+Username;
}
}

</script>
<body style="background:#53B9F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      
        <section class="login_content">
         
            <h1><font color="white"><i class="fa fa-paw">&nbsp;&nbsp;&nbsp;OrderHub</font></i></h1>
           <div class="input-group">
               <input type="email" id="Username" class="form-control"  required placeholder="Email"/>
               <span class="input-group-addon">
               <i class="fa fa-envelope"></i>
               </span>
                         </div>
           <font color="red"> <p id="email_error"></p></font>
            <div class="input-group">
               <input type="password" id="Password" placeholder="Password" class="form-control" required/>
               <span class="input-group-addon">
               <i class="fa fa-key"></i>
               </span>
          </div>
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

</body>

</html>
