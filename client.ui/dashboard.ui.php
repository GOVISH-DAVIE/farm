 <html>
<head>
<body>
  <nav> <!-- navbar content here  --> </nav>

 <ul id="slide-out" class="sidenav z-depth-5">
   <li>
     <div class="user-view z-depth-5  ">
     <div class="background">
       <img src="https://materializecss.com/images/office.jpg">
     </div>
     <a href="#user"><img class="circle" src="images/image.jpg"></a>
     <a href="#name"><span class="white-text name">John Doe</span></a>
     <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>

   </div>
 </li>
   <li><?php echo '<a href=?q='.md5("_home").' class="waves-effect">' ?><i class="material-icons">home</i>home</a></li>
   <li> <?php echo '<a href=?q='.md5("_contact").' class="waves-effect">' ?><i class="material-icons">view_comfy</i> contracts</a></li>
   <li> <?php echo '<a href=?page=logout'.' class="waves-effect">' ?><i class="material-icons">view_comfy</i> logout</a></li>
   <li><div class="divider"></div></li>
   <li><a class="subheader">more..</a></li>
   <li><a class="waves-effect" href="#!">account settings</a></li>
 </ul>
 <a href="#" data-target="slide-out" class="sidenav-trigger z-depth-5 red darken-4 btn-floating"><i class="material-icons">menu</i></a>

    <?php

    if (isset($_GET['q'])) {
      switch ($_GET['q']) {
        case md5('_home'):
          require_once 'client.ui/layouts/home.ui.php';
          break;
        case md5('_contact'):
          # code...
          require_once 'client.ui/layouts/contracts.ui.php';
          break;

        default:
          # code...
          require_once 'client.ui/layouts/home.ui.php';

          break;
      }

    }else {
      # code...
      require_once 'client.ui/layouts/home.ui.php';
    }
     ?>
  <div class="fixed-action-btn animated jackInTheBox">
    <a class="btn-floating btn-large red btn-floating pulse z-depth-5">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red btn-floating pulse"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1 btn-floating pulse"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green btn-floating pulse"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue btn-floating pulse"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
</body>
<script src="js/shopy.js" charset="utf-8"></script>

</html>
