<?php
session_start();
include_once "util/db_util.php";
include_once "db_function/rss_link_function.php";

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset = "utf-8" />

  <!-- tablestyle!-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>

  <script type="text/javascript" src="js/functional_js.js"></script>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body align="center">
<section class="w3-container w3-red">
  <h1> Tugas Besar Web Semantik - RSS</h1>
  <h2> Dari Kelompok : Efraim, Mathias, Sehat, Kelvin, dan Silvia</h2>
</section>
        <div style="clear:both;"></div>
        <!--Tag for content-->
        <main>
            <?php
            $nav = filter_input(INPUT_GET, "navito");
            $title = '';
            switch ($nav) {
                /////Navigasi
                case 'home':
                    include_once './crud/read/home.php';
                    $title = 'Home RSS Link';
                    break;
				case 'create_rss':
                    include_once './crud/create/create_rss.php';
                    $title = 'Tambahkan RSS Link';
                    break;

				default:
                    include_once './crud/read/home.php';
                    $title = 'Home RSS Link';
                    break;
                }
            ?>
        </main>
		<title>
        <?php  echo $title; ?></title>

</body>
</html>
