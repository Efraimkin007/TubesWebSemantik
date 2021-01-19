<?php

$foaf = new EasyRdf\Graph("http://localhost/TubesWebSemantik/page/TestRDF.xml");
$foaf->load();
$me = $foaf->primaryTopic();
echo "My name is: ".$me->get('foaf:name')."\n";

?>