<?php 
//CREATE DATA
$submitPressed = filter_input(INPUT_POST, "btnSubmit");
if($submitPressed){
	$JudulRSS = filter_input(INPUT_POST, "txtJudulRSS");
	$LinkRSS = filter_input(INPUT_POST, "txtLinkRSS");
	
	$result = insertRSS($JudulRSS, $LinkRSS);
}
?>


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
<input class="w3-button w3-blue w3-round-large" type="submit" Value="Tambahkan Data" name="btnSubmit"/>
