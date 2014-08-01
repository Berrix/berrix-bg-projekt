<html>

<head>
<link href="../styles/mainclass.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
include('../engine/engine.php');
?>

<div class="top">
<image src="../design/lost_world_banner.jpg" style="height:100px; width:950px;"/>
</div>

<div class="mainplace">

<div class="middle">

<?php

if(!isset($_COOKIE['user']))
{
	header('Location: ../index.php?page=home');
}

@$page = $_GET['page'];

	  if(!isset($page)) {
	  $page="home";
	  }

	  if($page=="home"){ ?>
	  	<a class="mainpos">
	  	<h1>Willkommen auf Lost World</h1>
	  	<p class="willk_txt">
	  	Das erste Browsergame seiner Art. Hier gibt es mehr Features</br>
		als bei anderen Strategie - Sci-Fi Games. Lost World ist sehr</br>
		deteilliert und fordert deine Strategischen K&uuml;nste.</br>
		</br>
		Es gibt hier 8 Wunderfolle Spezies die individuelle eigenschaften besitzen.</br>
		Jede besitzt eine Gro&szlig;e anzahl von Kleinen und Gro&szlig;en Schiffstypen</br>
		mit rassespezifischen Design. Jede Spezies ben&ouml;tigt andere planeten Typen um zu</br>
		&uuml;berleben. &Uuml;bernimm die F&uuml;hrung von einem Volk und lasse es unter deiner</br>
		Kontrolle aufbl&uuml;hen. Handle mit anderen oder f&uuml;hre Krieg gegen Sie.</br>
		Es h&auml;ngt alles von dir und deinen Entscheidungen ab.</br>
		Der technologische Fortschritt deines Volkes liegt bei dir.</br>
	  	</p>
<?php
	  }

	  if($page=="uniselect"){ ?>
	  	<a class="unisel_main">
	  	<h1>W&auml;hle dein Universum</h1>
	  	<p>
	  		<a class="uniselect1"><img src="gamedesign/unipic1.jpg" hight="190px" width="185px"></br>
	  								<a class="button1" href="game.php?page=uni1reg">Weiter<a/></a>
	  		<a class="uniselect2"><img src="gamedesign/unipic2.png" hight="190px" width="185px"></a>
	  	</p>
	  	</a>
<?php
	}

	  if($page=="unistat"){ ?>
	  	<a class="unistat_main">
	  		<a class="unistat_cell1">Universum 1</a>
	  		<a class="unistat_cell2">Universum 2</a>
	  		<a class="unistat_cell3">Status: Online</a>
	  		<a class="unistat_cell4">Status: Offline</a>
	  		<a class="unistat_cell5">Galaxien: 1</a>
	  		<a class="unistat_cell6">Galaxien: 1</a>
	  		<a class="unistat_cell7">Spieler:1</a>
	  		<a class="unistat_cell8">Spieler:0</a>
	  		<a class="unistat_cell9">Rassen:</br>Menschen</br>Teraner</br>3</br>Gorakesh</br>Nagonier</br>Nerosch</br>Nimeren</br>Unbekannt</a>
	  		<a class="unistat_cell10">Rassen:</a>
	  	</a>

<?php
	}


	  if($page=="uni1reg"){
	  	include '../engine/engine.php';
		?>
		<script type="text/javascript" src="unireg.js"></script>
	  	<a class="uni1reg">
	  		<h2>W&auml;hle eine Spezies und einen Namen f&uuml;r dein Volk</h2>
	  		<a class="uni1regform">
	  		<form method="post" accept-charset="uft-8">
	  			<input type="radio" name="mensch" value="Mensch" />Menschen</br>
	  			<input type="radio" name="teraner" value="Teraner" />Teraner</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt</br>
	  			<input type="radio" name="unbekannt" value="Unbekannt" />Unbekannt
	  		</form>
	  		<form method="post">
	  		<a class="namefield"><input type="text" name="volkname" /></a>
	  		<a class="submit"><input type="submit" name="save" value="Daten Speichern" /></a>
	  		</form></a>
	  		<script type="text/javascript">
	  			function menschtxt() {
				window.open("menschtxt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function terantxt() {
				window.open("terantxt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unbtxt() {
				window.open("unbtxt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unb2txt() {
				window.open("unb2txt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unb3txt() {
				window.open("unb3txt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unb4txt() {
				window.open("unb4txt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unb5txt() {
				window.open("unb5txt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
				function unb6txt() {
				window.open("unb6txt.php","mentxt","height=580,width=980px,menubar=0,resizeable=0,scrollbars=1,status=0,titlebar=1,toolbar=0,dependent=1,locationbar=0,");}
	  		</script>
	  		<a class="besh3">
	  		<h3>Spezies Beschreibung</h3>
	  		</a>
	  		<a class="mentxt" onclick="menschtxt()"/>Mensch</a></br>
	  		<a class="tertxt" onclick="terantxt()"/>Teraner</a></br>
	  		<!--<a class="unbtxt" onclick="unbtxt()"/>Unbekannt</a></br>
	  		<a class="unb2txt" onclick="unb2txt()"/>Unbekannt</a></br>
	  		<a class="unb3txt" onclick="unb3txt()"/>Unbekannt</a></br>
	  		<a class="unb4txt" onclick="unb4txt()"/>Unbekannt</a></br>
	  		<a class="unb5txt" onclick="unb5txt()"/>Unbekannt</a></br>
	  		<a class="unb6txt" onclick="unb6txt()"/>Unbekannt</a></br>-->
	  	</a>


<?php
	}

	  if($page=="account"){ ?>
	  	<a class="account_settings">
	  	</a>

<?php
	}

	  if($page=="logout"){ ?>
	  	<a class="logout">
	  	<?php
	  	setcookie("user", "Berrix", time()-60);
	  	if(!isset($_COOKIE['user']))
	  	{
	  		header('Location: ../index.php?page=home');
	  	}
	  	?>
	  	</a>

<?php
	}

?>

</div>

<div class="nav">

<ul class="navbar">
	<li><a href="game.php?page=home">Startseite</a></li>
	<li><a href="game.php?page=uniselect">Universen</a></li>
	<li><a href="game.php?page=unistat">Uni-Statistic</a></li>
	<li><a href="game.php?page=account">Account</a></li>
	<li><a href="game.php?page=logout">Logout</a></li>
</ul>

<div class="uninews">

	<?php
	$datei = fopen("../uninews.txt", "r");
	?>
	<?php while (!feof($datei)) {
		$uninews = htmlspecialchars(fread($datei, 10240));
		print nl2br(("$uninews"));
	}?>

</div>

<div class="uninews2">

	<?php
	$datei2 = fopen("../uninews2.txt", "r");
	?>
	<?php while (!feof($datei2)) {
		$uninews2 = htmlspecialchars(fread($datei2, 10240));
		print nl2br(("$uninews2"));
	}?>

<div class="footer"><a class="footer_txt">Programmiert von Berrix | Designed von Berrix</a></div>

</div>

</div>

</div>

</body>

</html>