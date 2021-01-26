<?php
function selectRSS(){
  //CONNECT DATA
  $link = createConnection();

  //READ
  $query = "SELECT * FROM link_rss";
  $result = $link->query($query);
  closeConnection($link);
  return $result;
}

function insertRSS($JudulRSS,$LinkRSS){
	//CONNECT DATA
	$link = createConnection();

	//CREATE
	$query = "INSERT INTO link_rss(title, link_data_rss) VALUES(?,?)";
	$stmt = $link->prepare($query);
	$stmt->bindParam(1,$JudulRSS);
	$stmt->bindParam(2,$LinkRSS);
	$link->beginTransaction();
	if($stmt->execute()){
    $link->commit();
	} else {
    $link->rollBack();
	}
	header("location:index.php?navito=home");
	closeConnection($link);
  //return $result;
}

/*function updateRSS($JudulRSS, $LinkRSS, $result){
	//CONNECT DATA
	$link = createConnection();

	//UPDATE
	$query = "UPDATE link_rss SET title=?, link_rss=? WHERE id_link_rss=?"
	$stmt = $link->prepare($query);
	$stmt->bindParam(1, $JudulRSS);
	$stmt->bindParam(2, $LinkRSS);
	$stmt->bindParam(3, $result['id_link_rss']);
	$link->beginTransaction();
	if($stmt->execute()){
		$link->commit();
	}
	else{
		$link->rollBack();
	}
	closeConnection($link);
	header('location:index.php?navito=home');
	return $result;
}

function deleteRSS($dataLinkRSS){
  //CONNECT DATA
  $link = createConnection();

  //DELETE
  $query = "DELETE FROM link_rss WHERE id_link_rss=?";
  $stmt = $link->prepare($query);
  $stmt->bindParam(1,$dataLinkRSS);
  $link->beginTransaction();
  if($stmt->execute()){
    $link->commit();
  } else {
    $link->rollBack();
  }
  closeConnection($link);
}*/
?>
