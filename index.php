<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">  <!-- Compiled and minified JavaScript -->
    <!-- jQuery is required by Materialize to function -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script></head>

</head>

<?php
session_start();
if(isset($_GET['page'])){
if($_GET['page']=="logout"){

   session_destroy();
   die(header('location:index.php'));

} else if ($_GET['page'] == 'company') {
    include_once 'company.ui/acc/signup.php';
  }
  else if ($_GET['page'] == 'farmer') {
      include_once 'client.ui/acc/signup.php';
    }else if ($_GET['page'] == 'director') {
      include_once 'company.ui/acc/signup.php';
    }

}else

if(isset( $_SESSION['pinn'])){
  $GLOBALS['pin']  = $_SESSION['pinn'];
  // echo $GLOBALS['pin'] ;
  if ($_SESSION['attribute'] == "company") {
    # code...
    include_once 'company.ui/dashboard.ui.php';
  }elseif ($_SESSION['attribute'] == "users") {
    # code...
    include_once 'client.ui/dashboard.ui.php';
  }else {
    include_once 'director.php';
  }

}else{
      include_once 'director.php';
 }
?>
<script src="js/index.js" charset="utf-8"></script>
<script src="js/shopy.js"></script>