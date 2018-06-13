<?php
/**
 *
 */
    require_once 'clientAccDb__lib.php';
class companyAcc__lib extends clientAccDb__lib
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
      public function setArr($signUpnames, $signUpEmails, $signUpPasswords,$pinn, $setter)
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
          $this->insert($this->insertArr, $this->insertTbl,$this->tblList);
      }
      public function contractArr($productname,$pinn,$companyPinn, $days, $datePick, $toDatePick, $size, $description, $tbl)
      {
        $this->insertArr = array(
           'null',
           $pinn,
           $companyPinn,
           $productname,
           $days,
            $datePick,
            $toDatePick,
            $size,
            $description,

           date('y-m-d h-i-sa'),
            date('y-m-d h-i-sa'),
          );
      $this->tblList = array(
        'id',
        'pinn',
        'companyPinn',
        'productname',
        'days',
        'datepick',
        'toDatePick',
        'size',
        'description',
        'updated_on',
        'created_on'
          );
          $this->insertTbl = $tbl;
          $this->insert($this->insertArr, $this->insertTbl,$this->tblList);
      }
      private function insert($arr,$tbl,$List)
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
    public function selectMyContract()
    {
      $rent = array();
      $ids = array();
      $pinn = array();
      $productname = array();
      $days = array();
      $datepick = array();
      $toDatePick = array();
      $size = array();
      $description = array();
      $updated_on = array();
      $created_on  = array();
        try {
        $stmt = $this->dbconn->prepare("SELECT * FROM `contracts`");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        while ($result = $stmt->fetch()) {
          $ids[] = $result->id;
          $pinn [] = $result->pinn;
          $productname[] = $result->productname;
          $days[] = $result->days;
          $datepick[] = $result->datepick;
          $toDatePick[] = $result->toDatePick;
          $size[] = $result->size;
          $description[] = $result->description;
          $updated_on[] = $result->updated_on;
          $created_on[] = $result->created_on;

        }
        // $rent[] = $rent;
        // $rent []= $ids;
        // $rent[] = $productname;
        // $rent[]=$days;
        // $rent[]=$datepick;
        // $rent[]=$toDatePick;
        // $rent[]=$size;
        // $rent[]=$description;
        // $rent[] =
        $rent = array(
          'id' =>$ids ,
          'pinn' => $pinn,
          'productname' => $productname,
          'days' => $days,
          'datepick' => $datepick,
          'toDatePick' =>$toDatePick,
          'size' => $size,
          'description' => $description,
          'updated_on' => $updated_on,
          'created_on' => $created_on,
          );
        echo json_encode($rent);
      } catch (PDOException $e) {

      }

    }

    public function contractDelete($pinn, $companyPinn, $tbl)
    {
      $stmt = $this->dbconn->prepare("DELETE FROM `contracts` WHERE pinn = :pinn ");
      $stmt->bindParam(':pinn', $pinn);
      $stmt->execute();

      echo $pinn;
      # code...
    }
    public function contractPouse($pinn, $date,$two, $tbl)
    {
      $stmt = $this->dbconn->prepare("UPDATE `contracts` SET `updated_on`=:dates,`state`=:two WHERE pinn = :pinn");
      $stmt->bindParam(':pinn', $pinn);
      $stmt->bindParam(':dates', $date);
      $stmt->bindParam(':two', $two);
      $stmt->execute();
      echo $pinn;
    }

    public function contractCancel($pinn, $date,$two, $tbl)
    {
      $stmt = $this->dbconn->prepare("UPDATE `contracts` SET `updated_on`=:dates,`state`=:two WHERE pinn = :pinn");
      $stmt->bindParam(':pinn', $pinn);
      $stmt->bindParam(':dates', $date);
      $stmt->bindParam(':two', $two);
      $stmt->execute();

      echo $pinn;
      # code...
    }
        // $stmt = $this->dbconn->prepare("INSERT INTO `users` VALUES ()");
      }



     ?>
