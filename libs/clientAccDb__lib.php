<?php

/**
 * Db class
 */
class clientAccDb__lib
{
  private $DBH = null;
  private $pipe = null;
  private $host = null;
  private $dbname = null;
  private $user = null;
  private $pass = null;

  function __construct()
  {
    # code...
    $this->host = "127.0.0.1";
    $this->dbname = "farm";
    $this->user = "root";
    $this->pass = "";
  }
  //connect to DB
  public function conn()
  {
    try{
    $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
    $this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); # set error attribute
    return $this->DBH;

    }
    catch(PDOException $e) {
    echo "I'm sorry, Dave. I'm afraid I can't do that.";
    file_put_contents('PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND); # log errors to a file
    $this->DBH = "connection failed";

    }
  }



}




 ?>
