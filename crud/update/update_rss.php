<?php

/*$RSSId = filter_input(INPUT_GET,'updateRSSId');
if(isset($RSSId)){
  $result = updateRSS_JS($RSSId);
}

//UPDATE DATA
$submitPressed = filter_input(INPUT_POST,'btnSubmit');
if($submitPressed){
	$JudulRSS = filter_input(INPUT_POST, "txtJudulRSS");
	$LinkRSS = filter_input(INPUT_POST, "txtLinkRSS");

	$result = updateRSS($JudulRSS, $LinkRSS, $result);
}*/

include 'util/db_connect.php';
if(isset($_GET['id'])){
	$id= $_GET["id"];
	$sql = mysqli_query($con, "SELECT * FROM link_rss WHERE id_link_rss= '$id'");
	$row=mysqli_fetch_object($sql);
	$IdLinkRSS= $row->id_link_rss;
	$JudulRSS= $row->title;
	$LinkRSS= $row->link_data_rss;


}

?>

<form method="POST" action="update.php?id=<?php echo $id ; ?>" >
<table align="center" class="w3-container w3-light-gray">
<tr>
<td align="right">Judul/Title RSS :</td>
<td><textarea class="w3-input w3-round-large" type="text" name="txtJudulRSS" placeholder="Masukan Data Judul RSS" required="" name="btnSubmit"><?php echo $JudulRSS;?></textarea></td>
</tr>
<tr>
<td align="right">Link RSS :</td>
<td><textarea class="w3-input w3-round-large" type="text" name="txtLinkRSS" placeholder="Masukan Data Link RSS" required="" name="btnSubmit"><?php echo $LinkRSS;?></textarea></td>
</tr>
</table>

</br>
<button type="submit" class="w3-button w3-blue w3-round-large">Update</button>

</form>
