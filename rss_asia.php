<!DOCTYPE html>
<head>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<?php
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

?>
</body>
</html>