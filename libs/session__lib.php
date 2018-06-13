<?php
// session_start();
  /**
   *
   */
  class session__lib
  {

    function __construct()
    {
      echo "string";
    }
    public function set($var)
    {
      $_SESSION['id'] = $var;
      echo $_SESSION['id'];
    }
  public function checkId($set){
      echo $_SESSION[$set];

    }

  }

 ?>
