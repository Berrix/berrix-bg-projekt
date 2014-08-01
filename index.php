<html>

<head>
<link href="styles/mainclass.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="top">
<image src="design/lost_world_banner.jpg" style="height:100px; width:950px;"/>
</div>

<div class="mainplace">

<div class="middle">

<?php

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
		detailliert und fordert deine strategischen K&uuml;nste.</br>
		</br>
		Es gibt hier 8 wundervolle Spezies die individuelle Eigenschaften besitzen.</br>
		Jede besitzt eine gro&szlig;e Anzahl von Kleinen und Gro&szlig;en Schiffstypen</br>
		mit rassespezifischen Design. Jede Spezies ben&ouml;tigt andere Planetentypen um zu</br>
		&uuml;berleben. &Uuml;bernimm die F&uuml;hrung von einem Volk und lasse es unter deiner</br>
		Kontrolle aufbl&uuml;hen. Handle mit Anderen oder f&uuml;hre Krieg gegen Sie.</br>
		Es h&auml;ngt alles von dir und deinen Entscheidungen ab.</br>
		Der technologische Fortschritt deines Volkes liegt bei dir.</br>
	  	</p>
<?php
	  }

	  if($page=="screenshots"){ ?>
	  	<a class="mainpos">
	  	<h1>Screenshots</h1>
	  	<p>
	  		<a class="screens screen1"><img src="design/screen1.png" hight="190px" width="185px"></a>
	  	</p>
	  	</a>
<?php
	}

	  if($page=="infos"){ ?>


<?php
	}

	  if($page=="login"){
		include 'engine/engine.php';
		?>

	  	<a class="login">
	  	<form method="post" accept-charset="uft-8">
	  	Benutzername: <input type="text" name="usernamel" /></br>
	  	Passwort: <input type="password" name="passwordl" style="margin-left:31px;" /></br>
	  	<input type="submit" value="Anmelden" name="login" style="margin-left:90px; margin-top:20px;" />
	  	</form>
	  	</a>
	  	<p class="login_txt">
	  		<a href="index.php?page=forgotpassw" class="forgot_pw">Passwort?</a>
	  		<p class="login_error">
	  		<?php
	  			echo @$login_kommentar;
	  			setcookie("user", "Berrix", time()+60*60*24);
	  			if(isset($_COOKIE['user']))
	  			{
	  				print "<a href='game/game.php'>Cheaten</a>";
	  			}
	  		?>
	  		</p>
	  	</p>

<?php
	}

	  if($page=="regist"){ ?>

		<?php
		include 'engine/engine.php';
		?>

	  	<a class="regist">
	  	<form method="post" accept-charset="uft-8">
	  	Benutzername: <input type="text" name="username" style="margin-left:29px;" /></br>
	  	Passwort: <input type="password" name="pass" style="margin-left:58px;" /></br>
	  	Passwort-Wdh: <input type="password" name="passwdh" style="margin-left:22px;" /></br>
	  	E-mail: <input type="text" name="email" style="margin-left:75px;" /></br>
	  	E-mail-Wdh: <input type="text" name="emailwdh" style="margin-left:39px;" /></br>
		<input type="checkbox" name="agb" style="margin-top:20px; margin-left:-10px;"/>Ich habe die AGB gelesen und Akzeptiere Sie.</br>
	  	<input type="submit" name="regist" value="Registrieren" style="margin-left:90px; margin-top:20px; background-color:;"/>
	  	</form>
	  	<p class="regist_txt">Deine E-mail Adresse wird nicht f&uuml;r Werbezwecke oder sonstiges genutzt.</br>
	  						  Sie dient lediglich zur Passwort wiederherstellung und um dich &uuml;ber</br>
	  						  zuk&uuml;nftige Ereignisse zu informieren.</p>
	  	<p class="regist_error">
	  	<?php
	  		echo @$kommentar;
	  	?>
	  	</p>
	  	</a>

<?php
	}

	  if($page=="registered"){ 
	  	if(!isset($_COOKIE['temp1'])) {
	  		header("Location: index.php?page=home");
	  	}
		?>

	  <p class="registered_txt">

	  	<?php
	  		print "Willkommen ".htmlspecialchars($_COOKIE['temp1'])." dein Account wurde angelegt.</br>
	  				Du musst nur noch deine E-Mail Adresse best&auml;tigen.";
	  	?>

	  </p>

<?php
	}

?>

</div>

<div class="nav">

<ul class="navbar">
	<li><a href="index.php?page=home">Startseite</a></li>
	<li><a href="index.php?page=screenshots">Screenshots</a></li>
	<li><a href="index.php?page=infos">Infos</a></li>
	<li><a href="index.php?page=login">Login</a></li>
	<li><a href="index.php?page=regist">Registration</a></li>
</ul>

<div class="uninews">

	<?php
	$datei = fopen("uninews.txt", "r");
	?>
	<?php while (!feof($datei)) {
		$uninews = htmlspecialchars(fread($datei, 10240));
		print nl2br(("$uninews"));
	}?>

</div>

<div class="uninews2">

	<?php
	$datei2 = fopen("uninews2.txt", "r");
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