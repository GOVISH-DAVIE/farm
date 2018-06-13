
<?php
session_start();
// include_once '../libs/session__lib.php';
include_once '../libs/companyAcc__lib.php';
$Render = new companyAcc__lib();
if (isset($_GET)) {
    if ($_GET['q'] == 'cd') {
        $Render->setArr($_GET['signUpnames'], $_GET['signUpEmails'], $_GET['signUpPasswords'],$_GET['pinn'], 'company');
    }elseif ($_GET['q']  == 'appContracts') {

      echo $_GET['companyPinn'];
      $Render->contractArr($_GET['productname'],$_GET['pinn'],$_GET['companyPinn'], $_GET['days'], $_GET['datePick'],$_GET['toDatePick'],$_GET['size'],$_GET['description'], 'contracts');
    }elseif ($_GET['q']  == 'myContracts') {
      # code...
      $Render->selectMyContract();
    }elseif ($_GET['q']  ==  "contractDelete") {
      # code...
      $Render->contractDelete($_GET['pinn'],$_GET['companyPinn'], 'contracts');
    }
    elseif ($_GET['q']  ==  "contractPouse") {
      # code...
      $Render->contractPouse($_GET['pinn'],date('y-m-d h-i-sa'),2, 'contracts');
    }elseif ($_GET['q']  ==  "contractCancel") {
      # code...
      $Render->contractCancel($_GET['pinn'],date('y-m-d h-i-sa'),0, 'contracts');
    }elseif ($_GET['q'] == "contractActivate") {
      # code...
      $Render->contractCancel($_GET['pinn'],date('y-m-d h-i-sa'),1, 'contracts');
    }
    else {
      echo 'nan';
    }
}
 ?>
