<!DOCTYPE html>
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
					<div id="srodek2">					
<?php
session_start();
mysql_connect("sql.5v.pl:3306","db-user30061","cw0qejhyim524qrw");
mysql_select_db("db-user30061");

if (isset($_POST['log']))
{
   $login = $_POST['login'];
   $haslo = $_POST['haslo'];
 
   if (mysql_num_rows(mysql_query("SELECT login, haslo FROM users WHERE login = '".$login."' AND haslo = '".$haslo."';")) > 0)
   {
 
      $_SESSION['zalogowany'] = true;
      $_SESSION['login'] = $login;
 
   }
}
?>
<?php
if (isset($_POST['logout']))
{	
	session_unset();
	session_destroy();
}
?>
<?php
if(isset($_SESSION['zalogowany'])) { 
	if(mysql_num_rows(mysql_query("SELECT ankieta FROM users WHERE login = '".$_SESSION['login']."' AND ankieta = '1';")) > 0){
		print('<div id="pass">Wypełniałeś już tę ankietę.</div>');
	}
else if(isset($_POST['wyslij-ankiete'])){
	mysql_query("UPDATE users SET ankieta='1' WHERE login='".$_SESSION['login']."';");
		print('<div id="ankieta-zwrot">Dziękujemy za wypełnienie ankiety!</div>');
}
	else if(mysql_num_rows(mysql_query("SELECT ankieta FROM users WHERE login = '".$_SESSION['login']."' AND ankieta = '0';")) > 0){
			print('<div id="ankieta"><form action="ankieta.php" method="POST"><h2>Ankieta:</h2>
<h4>1. Od kiedy interesuję się informatyką: </h4>
<label><input type="radio" name="pyt1"/> Od szkoły podstawowej</label>
<label><input type="radio" name="pyt1"/> Od gimnazjum</label>
<label><input type="radio" name="pyt1"/> Od szkoły średniej</label>
<h4>2. Twój ulubiony język programowania: </h4>
<label><input type="radio" name="pyt2"/> C++</label>
<label><input type="radio" name="pyt2"/> JavaScript</label>
<label><input type="radio" name="pyt2"/> PHP</label>
<h4>3. Jaki jest poziom twojej wiedzy informatycznej wyniesionej ze szkoły: </h4>
<label><input type="radio" name="pyt3"/> niedostateczny</label>
<label><input type="radio" name="pyt3"/> mierny</label>
<label><input type="radio" name="pyt3"/> dostateczny</label>
<label><input type="radio" name="pyt3"/> dobry</label>
<label><input type="radio" name="pyt3"/> bardzo dobry</label>
<h4>4. Czy chcesz pracować jako programista? </h4>
<label><input type="radio" name="pyt4" checked/> Tak</label>
<label><input type="radio" name="pyt4"/> Nie</label>
<h4>5. Jakie egzaminy związane z informatyką już zdałeś: </h4>
<label><input type="checkbox" name="pyt4"/> E12</label>
<label><input type="checkbox" name="pyt4"/> E13</label>
<label><input type="checkbox" name="pyt4"/> E14</label>
<input type="submit" value="Wyślij" name="wyslij-ankiete" /></form><br/></div>');
	}
} 
else if (!(isset($_SESSION['zalogowany']))){
		print('<div id="ankieta-zwrot">Zaloguj się, aby mieć dostęp do ankiety.</div>');
}
?>
					</div>
					<div id="news">
<?php
if (isset($_POST['logout']))
{	
	echo "<div id='pass'>Zostałeś wylogowany.</div>";
}
?>
<?php
if(isset($_SESSION['zalogowany'])) { 
	print('<div class="witaj">Witaj, <span class="kolor" style="color: #FF0000;">'.$_SESSION['login'].'</span><br /><form action="ankieta.php" method="POST"><input type="submit" value="Wyloguj!" name="logout" onclick="wylogowanie();"></form></div>');
}
else if (!(isset($_SESSION['zalogowany']))){
		print('<form method="POST" action="ankieta.php">
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
<?php
if (isset($_POST['log']))
{
if (!(mysql_num_rows(mysql_query("SELECT login, haslo FROM users WHERE login = '".$login."' AND haslo = '".$haslo."';")) > 0))
{
	echo "<div id='pass'>Wpisano złe dane.</div>";
}
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