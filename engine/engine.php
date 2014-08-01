<?php

$host = "localhost";
$db = "lostworld";
$user = "lostworldadmin";
$pw = "iamtheadmin";
// Registration

@$regist = $_POST['regist'];
@$username = $_POST['username'];

if (isset($regist))
{
	if(!empty($_POST['username']))
	{
		if(!empty($_POST['pass']) && $_POST['pass'] == $_POST['passwdh'])
		{
			if(!empty($_POST['email']) && $_POST['email'] == $_POST['emailwdh'])
			{
				if(!empty($_POST['agb']))
				{
					$connect = mysqli_connect($host, $user, $pw);
					mysqli_select_db($connect, $db);

					$username = mysqli_real_escape_string($connect, $_POST['username']);
					$passwort = mysqli_real_escape_string($connect, md5($_POST['password']));
					$email = mysqli_real_escape_string($connect, $_POST['email']);
					$sql = "INSERT INTO  user";
					$sql .= "( username, password, email) VALUES(";
					$sql .= " '$username', '$passwort', '$email')";

					mysqli_query($connect, $sql);
					mysqli_close($connect);
					setcookie("temp1", $username, time()+30);
					header("Location: index.php?page=registered");
				}
				else
				{
					$kommentar = "<a style='color:red;'>Du hast also die AGB nicht gelesen?</a>";
				}
			}
			else
			{
				$kommentar = "<a style='color:red;'>Die E-Mail stimmt nicht mit der Wiederholung &uuml;berein.</br>oder das Feld ist leer</a>";
			}
		}
		else
		{
			$kommentar = "<a style='color:red;'>Das Passwort stimmt nicht mit der Wiederholung &uuml;berein</br>oder das Feld ist leer.</a>";
		}
	}
	else
	{
		$kommentar = "<a style='color:red;'>Der Benutzername fehlt.</a>";
	}
}

// Registration Ende

// Login

if(isset($_POST['login']))
{
	if(!empty($_POST['username1']))
	{
		if(!empty($_POST['password1']))
		{
			$connect = mysqli_connect($host, $user, $pw);
			mysqli_select_db($connect, $db);

			$username = $_POST['username1'];
			$passwort = md5($_POST['password1']);
			$abfrage = "SELECT username, passwort FROM user WHERE username LIKE '$username' LIMIT 1";
			$ergebnis = mysql_query($abfrage);
			$row = mysql_fetch_object($ergebnis);
			if($row->passwort == $passwort)
			{
				mysqli_close($connect);
				setcookie("userdata", $username, time()+60*60*24);
				header("Location: index.php?page=registered");
			}
		}
		else
		{
			$login_kommentar = "<a style='color:red;'>2</a>";
		}
	}
	else
	{
		$login_kommentar = "<a style='color:red;'>1</a>";
	}
}

//Login Ende

//Univerum 1 Registration

if(isset($_POST['rfu1']))
{}

//Univerum 1 Registration Ende

?>