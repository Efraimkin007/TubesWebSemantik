<?php
function createConnection(){
  $link = new PDO("mysql:host=localhost;dbname=rss_database_link","root","");
  $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
  $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $link;
}

function closeConnection(PDO $link){
  if($link!=null){
    $link = null;
  }
}

include 'util/db_connect.php';

$id = filter_input(INPUT_GET,'id');
if(isset($id)){
$JudulRSS = filter_input(INPUT_POST, 'txtJudulRSS');
$LinkRSS = filter_input(INPUT_POST, 'txtLinkRSS');
$sql = mysqli_query($con,"UPDATE link_rss SET title = '$JudulRSS', link_data_rss = '$LinkRSS' WHERE id_link_rss = '$id'");
var_dump($JudulRSS, $LinkRSS);
}

if($sql){
          $message = "Update SUCCESS!!";
           echo "<script type='text/javascript'>alert('$message');</script>";
      } else{
          $message = "Update FAILED!!";
           echo "<script type='text/javascript'>alert('$message');</script>";
      }

header('location:index.php?navito=home');


?>
