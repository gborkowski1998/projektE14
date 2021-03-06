﻿<!DOCTYPE html>
<html lang="PL">
	<head>
	
		<title>Projekt E.14</title>
	
		<meta charset="UTF-8">
		<meta name="author" content="Jakub Postek, Grzegorz Borkowski, Sławomir Pasiowiec">
		<meta name="keywords" content="projekt, e14, e.14, programowanie, aplikacji, internetowych, polaczenie, baza, danych, mySQL, PHP, HTML, CSS, Jakub, Postek, Grzegorz, Borkowski, Sławomir, Pasiowiec, Slawomir">
		<meta name="description" content="Strona stworzona przez Jakuba Postka, Grzegorza Borkowskiego oraz Sławomira Pasiowca jako projekt na przedmiot Programowanie Aplikacji Internetowych z zakresu zagadnień związanych z e14">
		<meta name="robots" content="index, follow">
		
		<link rel="stylesheet" type="text/css" href="css/projekt.css">
		<link rel="stylesheet" type="text/css" href="css/fontello.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin-ext" rel="stylesheet">
		
		<script type="text/javascript">
			function sprawdzenie(){
				var ankietka = document.getElementById("ankieta-zwrot");
				var srodek = document.getElementById("srodek2");
				if(ankietka.value = "Zaloguj się, aby mieć dostęp do ankiety."){
					srodek.style.overflow = "hidden";
				}
				else if(ankietka.value = "Dziękujemy za wypełnienie ankiety!."){
					srodek.style.overflow = "hidden";
				}
			}
			function przeniesienie(){
				location.href = "reg.php";
			}
			function podswietlenie(x){
				x.placeholder = "";
				var uzytkownik = document.getElementById("uzytkownik");
				uzytkownik.style.borderTop = "1px solid #FFFFFF";
				uzytkownik.style.borderBottom = "1px solid #FFFFFF";
				uzytkownik.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie(x){
				var login = document.getElementById("login");
				if(login.value==""){
				login.placeholder = "Login";
				}
				var uzytkownik = document.getElementById("uzytkownik");
				uzytkownik.style.borderTop = "1px solid #000000";
				uzytkownik.style.borderBottom = "1px solid #000000";
				uzytkownik.style.borderRight = "1px solid #000000";
			}
			function podswietlenie2(x){
				x.placeholder = "";
				var klucz = document.getElementById("klucz");
				klucz.style.borderTop = "1px solid #FFFFFF";
				klucz.style.borderBottom = "1px solid #FFFFFF";
				klucz.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie2(x){
				var haslo = document.getElementById("haslo");
				if(haslo.value==""){
				haslo.placeholder = "Hasło";
				}
				var klucz = document.getElementById("klucz");
				klucz.style.borderTop = "1px solid #000000";
				klucz.style.borderBottom = "1px solid #000000";
				klucz.style.borderRight = "1px solid #000000";
			}
			function podswietlenie3(x){
				x.placeholder = "";
				var klucz2 = document.getElementById("klucz2");
				klucz2.style.borderTop = "1px solid #FFFFFF";
				klucz2.style.borderBottom = "1px solid #FFFFFF";
				klucz2.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie3(x){
				var haslo2 = document.getElementById("haslo2");
				if(haslo2.value==""){
				haslo2.placeholder = "Powtórz hasło";
				}
				var klucz2 = document.getElementById("klucz2");
				klucz2.style.borderTop = "1px solid #000000";
				klucz2.style.borderBottom = "1px solid #000000";
				klucz2.style.borderRight = "1px solid #000000";
			}
			function podswietlenie4(x){
				x.placeholder = "";
				var email2 = document.getElementById("email2");
				email2.style.borderTop = "1px solid #FFFFFF";
				email2.style.borderBottom = "1px solid #FFFFFF";
				email2.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie4(x){
				var email = document.getElementById("email");
				if(email.value==""){
				email.placeholder = "E-mail";
				}
				var email2 = document.getElementById("email2");
				email2.style.borderTop = "1px solid #000000";
				email2.style.borderBottom = "1px solid #000000";
				email2.style.borderRight = "1px solid #000000";
			}
			function podswietlenie5(x){
				x.placeholder = "";
				var uzytkownik2 = document.getElementById("uzytkownik2");
				uzytkownik2.style.borderTop = "1px solid #FFFFFF";
				uzytkownik2.style.borderBottom = "1px solid #FFFFFF";
				uzytkownik2.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie5(x){
				var loginn = document.getElementById("login2");
				if(loginn.value==""){
				loginn.placeholder = "Login";
				}
				var uzytkownik2 = document.getElementById("uzytkownik2");
				uzytkownik2.style.borderTop = "1px solid #000000";
				uzytkownik2.style.borderBottom = "1px solid #000000";
				uzytkownik2.style.borderRight = "1px solid #000000";
			}
			function podswietlenie6(x){
				x.placeholder = "";
				var klucz3 = document.getElementById("klucz3");
				klucz3.style.borderTop = "1px solid #FFFFFF";
				klucz3.style.borderBottom = "1px solid #FFFFFF";
				klucz3.style.borderRight = "1px solid #FFFFFF";
			}
			function odswietlenie6(x){
				var haslo3 = document.getElementById("haslo3");
				if(haslo3.value==""){
				haslo3.placeholder = "Hasło";
				}
				var klucz3 = document.getElementById("klucz3");
				klucz3.style.borderTop = "1px solid #000000";
				klucz3.style.borderBottom = "1px solid #000000";
				klucz3.style.borderRight = "1px solid #000000";
			}
			function wylogowanie(){
				var ankieta = document.getElementById("ankieta");
				ankieta.style.visibility = "hidden";
			}
		</script>
		<script type="text/javascript">
	let newsy = [
		'Funkcja phpinfo() wyświetla informacje o wersji PHP?',
		'Jednoznacznym identyfikatorem rekordu w bazie danych jest pole klucza podstawowego?',
		'Funkcja ksort sortuje tablicę według klucza?',
		'Znacznik strong będzie wyświetlany w ten sam sposób co znacznik B?',
		'MySqlheck sprawdza, naprawia, optymalizuje lub analizuje tabele?',
		'Aby naprawić uszkodzoną tabelę w MySQL, należy wydać polecenie REPAIR TABLE?',
		'Zmienne typu int odnoszą się do liczb całkowitych?',
		'Znacznik meta języka HTML należy umieścić w części nagłówkowej witryny internetowej?',
		'Kaskadowe arkusze stylów tworzy się w celu ułatwienia formatowania strony?',
		'Deklaracja w języku JavaScript: var x=true; powoduje, że zmienna x jest typu logicznego?',
		'Konstruktor w języku PHP jest metodą o nazwie _construct?'
	];
	setTimeout(function(){
	let los = document.querySelector('#los');
			let losowa = Math.floor((Math.random()*newsy.length)+0);
		los.innerHTML=newsy[losowa];
	},0)
	setInterval(function(){
	let los = document.querySelector('#los');
			let losowa = Math.floor((Math.random()*newsy.length)+0);
		los.innerHTML=newsy[losowa];
	}, 5000);
		</script>	
</head>
<body onload="sprawdzenie();">	
		<div id="calosc">
			<div id="baner">
				<a href="index.php" title="Strona główna">
					<span class="tytul">
						Projekt E.14
					</span>
				</a>
			</div>
					<div id="menu_lewe">
						<div class="przycisk1">
							<a class="kafelki" href="index.php" title="Strona główna">
								<i class="icon-home-outline"></i>
							</a>
						</div>
						<div class="odstep"></div>
						<div class="przycisk2">
							<a class="kafelki" href="ankieta.php" title="Ankieta">
								<i class="icon-wpforms"></i>
							</a>
						</div>
						<div class="odstep"></div>
						<div class="przycisk3">
							<a class="kafelki" href="reg.php" title="Rejestracja">
								<i class="icon-user-add-outline"></i>
							</a>
						</div>
					</div>
					<div id="srodek">
					<form method="POST" action="reg.php" style="text-align:center;">
					<h2>Rejestracja</h2>
<table>
<tr>
<td><input type="text" name="login" id="login" pattern="[a-zA-Z0-9].{6,}" title="Login może składać się z liter, cyfr oraz zawierać conajmniej 6 znaków." placeholder="Login" onfocus="podswietlenie(this);" onblur="odswietlenie();" required></td><td><input type="tel" id="uzytkownik" value="&#xe803;" style="font-family:fontello; margin-top: 10px;" disabled></td>
</tr>
<tr>
<td><input type="password" name="haslo1" id="haslo" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi zawierać conajmniej jedną dużą, jedną małą literę oraz conajmniej jedną cyfrę o długości conajmniej 6 znaków."  placeholder="Hasło" onfocus="podswietlenie2(this);" onblur="odswietlenie2();"  required></td><td><input type="tel" id="klucz" value="&#xe802;" style="font-family:fontello" disabled></td>
</tr>
<tr>
<td><input type="password" name="haslo2" id="haslo2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi się zgadzać z poprzednim hasłem."  placeholder="Powtórz hasło" onfocus="podswietlenie3(this);" onblur="odswietlenie3();"  required></td><td><input type="tel" id="klucz2" value="&#xe802;" style="font-family:fontello" disabled></td>
</tr>
<tr>
<td><input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"  placeholder="E-mail" onfocus="podswietlenie4(this);" onblur="odswietlenie4();"  required></td><td><input type="tel" id="email2" value="&#xe804;" style="font-family:fontello" disabled></td>
</tr>
</table>
<input type="submit" value="Utwórz konto" name="reg">
<?php
session_start();
mysql_connect("sql.5v.pl:3306","db-user30061","cw0qejhyim524qrw");
mysql_select_db("db-user30061");

if (isset($_POST['reg']))
{
   $login = $_POST['login'];
   $haslo1 = $_POST['haslo1'];
   $haslo2 = $_POST['haslo2'];
   $email = $_POST['email'];
   
   if (mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$login."';")) == 0)
   {
      if ($haslo1 == $haslo2)
      {
         mysql_query("INSERT INTO `users` (`login`, `haslo`, `email`)
            VALUES ('".$login."', '".$haslo1."', '".$email."');");
 
         echo "<div id='pass'>Konto zostało utworzone!</div>";
      }
      else echo "<div id='pass'>Hasła nie są takie same</div>";
   }
   else echo "<div id='pass'>Podany login jest już zajęty.</div>";
}
?>
</form>
					</div>
					<div id="news">
<?php
if (isset($_POST['log']))
{
   $login = $_POST['login'];
   $haslo = $_POST['haslo'];
 
   if (mysql_num_rows(mysql_query("SELECT login, haslo FROM users WHERE login = '".$login."' AND haslo = '".$haslo."';")) > 0)
   {
 
      $_SESSION['zalogowany'] = true;
      $_SESSION['login'] = $login;
 
   }
   else echo "<div id='pass'>Wpisano złe dane.</div>";
}
?>
<?php
if (isset($_POST['logout']))
{	
	session_unset();
	session_destroy();
	echo ("<div id='pass'>Zostaleś wylogowany.</div>") ;
}
?>
<?php
if(isset($_SESSION['zalogowany'])) { 
	print('<div class="witaj">Witaj, <span class="kolor" style="color: #FF0000;">'.$_SESSION['login'].'</span><br /><form action="ankieta.php" method="POST"><input type="submit" value="Wyloguj!" name="logout" onclick="wylogowanie();"></form></div>');
}
else if (!(isset($_SESSION['zalogowany']))){
		print('<form method="POST" action="index.php">
	<span class="logowanie">
		Logowanie
	</span>
<table>
<tr>
<td><input type="text" name="login" id="login2" placeholder="Login" onfocus="podswietlenie5(this);" onblur="odswietlenie5();" required></td><td><input type="tel" id="uzytkownik2" value="&#xe803;" style="font-family:fontello; margin-top: 10px;" disabled></td>
</tr>
<tr>
<td><input type="password" name="haslo" id="haslo3" placeholder="Hasło" onfocus="podswietlenie6(this);" onblur="odswietlenie6();" required></td><td><input type="tel" id="klucz3" value="&#xe802;" style="font-family:fontello" disabled></td>
</tr>
</table>
<div class="przyciski"><input type="submit" value="Zaloguj" name="log"><input type="button" onclick="przeniesienie();" value="Rejestruj!"></div>
</form>');
}
?>
<div class="odstep"></div>
<div id="ciekawostki">
<h3>Czy wiesz, że...</h3>
<div id="los">
</div></div>
					</div>
					<div class="czyscik"></div>
			<div id="stopka">
				<span class="stopka">
					&copy; 2017 - Strona stworzona przez Jakuba Postka, Grzegorza Borkowskiego oraz Sławomira Pasiowca
				</span>
			</div>
		</div>
	</body>
</html>