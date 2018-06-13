
<?php
// include_once '../libs/session__lib.php';
include_once '../libs/clientAcc__lib.php';
$Render = new clientAcc__lib();
if (isset($_GET)) {
  if ($_GET['q'] == 'cd') {
        $Render->setArr($_GET['signUpnames'], $_GET['signUpEmails'], $_GET['signUpPasswords'],$_GET['pinn'], 'users');
   }elseif ($_GET['q']  == "contracts") {
     # code...
    $Render->selectContracts();
   }
   
   else {
  echo 'nan';
}

}
 ?>
