<?php
/**
 * @ mycode
 */
require_once 'clientAccDb__lib.php';
class clientAcc__lib extends clientAccDb__lib

{
private $insertTbl = null;
private $insertArr = null;
private $dbconn = null;
private $tblList = null;
private $pipe = null;

  function __construct()
  {
    $this->pipe = new clientAccDb__lib();
    $this->dbconn =$this->pipe->conn();
  }
  public function setArr($signUpnames, $signUpEmails, $signUpPasswords, $pinn, $setter)
  {

    $this->insertArr = array(
      'null',
      $signUpnames,
      $signUpEmails,
      $signUpPasswords,
      $pinn,
      date('y-m-d h-i-sa'),
      date('y-m-d h-i-sa'),
      date('y-m-d h-i-sa'),
    );

   

    $this->tblList = array(
      'id',
      'name',
      'email',
      'password',
      'pinn',
      'created_at',
      'updated_at',
      'renderTime'
    );


    $this->insertTbl = $setter;
    $this->insert($this->insertArr, $this->insertTbl, $this->tblList);
  }
  public function selectConracts()
  {
        try{
          printf("ok ");

        }catch(PDOException $e){
      echo "I'm sorry, Dave. I'm afraid I can't do that. " . $e->getMessage();
      file_put_contents('user.txt', $e->getMessage(), FILE_APPEND);
           
        }
  }
  public function insert($arr,$tbl,$List)
  {
    $state = 1;
    $stateString = 'state';
    try{
      $max = sizeof($arr);
      $q = "INSERT INTO $tbl(";
      foreach( $List as $value ) {   $q .= "`$value`, "; }
      $q .="`state`) VALUES(";
     foreach( $List as $value ) {$q .= " :$value, "; }
      $q .= ":state)";
      $stmt = $this->dbconn->prepare("$q");
      for($i = 0; $i < $max;$i++){$stmt->bindParam($List[$i] ,$arr[$i]); }
      $stmt->bindParam (":state", $state);
      $stmt->execute();
      echo "$tbl";
              }
            catch(PDOException $e)
            {
              echo "I'm sorry, Dave. I'm afraid I can't do that. ".$e->getMessage();
              file_put_contents('user.txt', $e->getMessage(), FILE_APPEND);
            }

}
    // $stmt = $this->dbconn->prepare("INSERT INTO `users` VALUES ()");
  }



 ?>
