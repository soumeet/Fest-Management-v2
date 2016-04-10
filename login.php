<?php
session_start();	
if(!empty($_SESSION['sid']))
    header("location: client.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/lato.css">
  <link rel="stylesheet"  type="text/css" href="css/montserrat.css" >
  <link rel="stylesheet" href="css/dynamics.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <!--<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>-->
      </button>
      <a class="navbar-brand" href="logout.php">Sankalp'16</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>

<div  class="container">
<ul class="nav nav-pills nav-justified">
    <!--<li class="active"><a data-toggle="pill" href="#adm_login">Admin</a></li>-->
    <li><a data-toggle="pill" href="#client_login">Client</a></li>
  </ul>
   <div class="tab-content">
    <!--<div id="adm_login" class="tab-pane fade in active">
      <br><br><br><br>
      <form name="fm_adm_login" action="admin.html" onsubmit="return login_validation(fm_adm_login)" method="post">
        <center>
        <table>
          <tr>
            <td>
              <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"></span>
                  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" name="tb_username" id="tb_username">
              </div><br>
            </td>
          </tr>
          <tr>
            <td>
              <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"></span>
                  <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="tb_password" id="tb_password">
              </div><br>
            </td>
          </tr>
          <tr>
            <td>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="btn btn-default" type="submit" name="bt_login" value="Login">
            </td>
          </tr>
        </table>
        </center>
      </form>
    </div>-->

       <!--onsubmit="return login_validation(fm_client_login)"-->
    <!--<div class="col-md-4 contact-form">
        <h3>Drop us a line</h3>
        <div id="show_contact_msg"></div>
        <form class="ajax-form" method="post" name="contact_form" id="contact_form" action="php/verify.php">
            <div class="form-group">
                <input type="text" class="form-control" id="tb_username" name="tb_username" placeholder="Username" value="" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="tb_password" name="tb_password" placeholder="Password" value="" required>
            </div>
            <div class="form-group">
                <button type="submit" name="bt_clnt_login" id="bt_clnt_login" class="btn btn-default"><i class="fa fa-paper-plane fa-fw"></i> Login</button>
            </div>
        </form>
</div>-->
       
    <div id="client_login" class="tab-pane fade in active">
      <br><br><br><br>
      <form class="ajax-form" name="fm_client_login" id="fm_client_login"  action="php/verify.php" method="post">
        <center>
        <table>
          <tr>
            <td>
              <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2"></span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" name="tb_username" id="tb_username">
              </div><br>
            </td>
          </tr>
          <tr>
            <td>
              <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"></span>
                  <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="tb_password" id="tb_password">
              </div><br>
            </td>
          </tr>
          <tr>
            <td>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="btn btn-default" type="submit" name="bt_clnt_login" value="Login" >
            </td>
          </tr>
          </table>
        </center>
      </form>
    </div>
       
  </div>
</div>
<!--
<footer class="text-center">
  <h5>copyright@2016</h5>
</footer>
-->
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/login_validate.js"></script>
</body>
</html>
