<?php include 'include/common.php';
  if(!isset($_SESSION['email']))
  {
     header('Location: index.php');
  }
  session_unset();
 if(session_destroy()){
  header('Location: index.php');
  }
  ?>