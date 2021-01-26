<?php
//READ DATA
$result = selectRSS();


//CREATE DATA
$submitPressed = filter_input(INPUT_POST, "btnSubmit");
if($submitPressed){
	$JudulRSS = filter_input(INPUT_POST, "txtJudulRSS");
	$LinkRSS = filter_input(INPUT_POST, "txtLinkRSS");
	$result = insertRSS($JudulRSS, $LinkRSS);
}

//DELETE DATA
$command = filter_input(INPUT_GET, "cmd");
if(isset($command) && $command == "del"){
	$IdLinkRSS = filter_input(INPUT_GET, 'IdLinkRSS');
	if(isset($IdLinkRSS)){
		$result = deleteRSS($IdLinkRSS);
	}
}


?>
<form method="POST" action="" >
<table align="center" class="w3-container w3-light-gray">
<tr>
<td align="right">Judul/Title RSS :</td>
<td><textarea class="w3-input w3-round-large" type="text" name="txtJudulRSS" placeholder="Masukan Data Judul RSS" required=""></textarea></td>
</tr>
<tr>
<td align="right">Link RSS :</td>
<td><textarea class="w3-input w3-round-large" type="text" name="txtLinkRSS" placeholder="Masukan Data Link RSS" required=""></textarea></td>
</tr>
</table>


</br>

<input name="btnSubmit" type="submit" value="Tambahkan Data" class="w3-button w3-blue w3-round-large"/>
</form>

</br></br>
<table align="center" border="center">
<th>No. </th>
<th>Title RSS </th>
<th>URL RSS and Read RSS </th>
<th>Tindakan</th>
<tbody>
<?php
    $i = 1;
    foreach($result as $row){
?>
<tr>
<td><?php echo $i; $i+=1; ?></td>
<td><?php echo $row['title']; ?></td>
<td><a href="<?php echo $row['link_data_rss']; ?>"><?php echo $row['link_data_rss']; ?></a></td>
<td><a href="?navito=update_rss&&id=<?php echo $row['id_link_rss']; ?>" class="w3-button w3-green w3-round-large">Update</a> /
<a href=".../../delete.php?id=<?php echo $row['id_link_rss'];?>" class="w3-button w3-red w3-round-large">Delete</a>
 </td>
</tr>
</tbody>
	<?php } ?>
</table>
