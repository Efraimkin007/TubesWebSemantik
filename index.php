<!DOCTYPE html>
<head>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body align="center">
<h1> Tugas Besar Web Semantik - RSS</h1>
<h2> Dari Kelompok : Efraim, Mathias, Sehat</h2>

<input class="w3-input w3-round-large" type="text"  placeholder="Masukan Data Judul RSS" required="">
<input class="w3-input w3-round-large" type="text"  placeholder="Masukan Data Link RSS" required="">

<input class="w3-button w3-blue w3-round-large" type="submit" Value="Tambahkan Data" name="btnSubmit"/>
<table border="1" align="center">

<?php 
/*
$xml = simplexml_load_file("http://rss.cnn.com/rss/edition_asia.rss");

foreach($xml->channel->item as $DATA)
{
	echo "<div class='w3-panel w3-padding-16'></br>";
	echo "<h2 >".$DATA->title." "."</br></h2>";
	echo $DATA->description." "."<br/>";
	echo "<br/>";
	echo "<a href='$DATA->link' class='w3-btn w3-black w3-round-large'>Kunjungi Website</a>";
	echo "<br/></div>";
}
*/
?>

<th>
No
</th>
<th>
Link RSS
</th>
<tr>
<td>
1
</td>
<td>
<a href="rss_world_top_stories.php">RSS World Top Stories</a>
</td>
</tr>
<tr>
<td>
2
</td>
<td>
<a href="rss_world_zimbabwe.php">RSS World Zimbabwe</a>
</td>
</tr>
<tr>
<td>
3
</td>
<td>
<a href="rss_berita_nasional.php">RSS Berita Nasional</a>
</td>
</tr>
<tr>
<td>
4
</td>
<td>
<a href="rss_vice_indonesia.php">RSS Vice Indonesia</a>
</td>
</tr>
</tr>
<tr>
<td>
5
</td>
<td>
<a href="rss_asia.php">RSS Asia</a>
</td>
</tr>
</tr>
<tr>
<td>
6
</td>
<td>
<a href="rss_technology.php">RSS Technology</a>
</td>
</tr>
</table>


</body>
</html>