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

$id = filter_input(INPUT_GET, "id");
if(isset($id)){
  $link= mysqli_connect('localhost','root','','rss_database_link') or die(mysqli_connect_error());
  $query = "DELETE FROM link_rss WHERE id_link_rss=?";
  mysqli_autocommit($link, false);
  if($stmt=mysqli_prepare($link, $query)){
    mysqli_stmt_bind_param($stmt,"i",$id);
    mysqli_stmt_execute($stmt) or die(mysqli_error($link));
    mysqli_commit($link);
    mysqli_stmt_close($stmt);
  }
  mysqli_close($link);
}
header('location:index.php?navito=home');
?>
