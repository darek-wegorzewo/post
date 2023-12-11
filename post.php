<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>POST</title>
	<link rel="stylesheet" href="styl4.css" />
</head>
<body>
<div>
</div>

<div id="baner">
<h1>Forum wielbicieli psów</h1>
</div>

<div id="lewy">
<img src="obraz.jpg" alt="foksterier" />
</div>

<div id="prawy1">
<h2>Zapisz się</h2>
		<form action="post.php" method="post">
			<label>
				dane1:
				<input type="text" name="0" /><br/>
			</label>
			<label>
				dane2:
				<input type="text" name="1" /><br/>
			</label>

			
			<input type="submit" value="Zapisz">
		</form>
<?php

if (!isset($_POST[0],$_POST[1]))
{}
else
{
	
//print_r($_POST);

$sterujaca=false;
	for ($i=0; $i<2; $i++)
	{
		if(empty($_POST[$i]))
		{
			//echo "zmienna ".$i."  pusta. 
			echo "Wprowadź wszystkie dane. Pętla przerwana</br>";
			$sterujaca=true;
			break;
		}
		//echo "echo  ".$i."</br>";
	}

if(!$sterujaca){

	$conn = mysqli_connect('localhost', 'root', '', 'egzamin');
	$sql = "INSERT INTO samoloty(id, typ, linie) VALUES (null,'$_POST[0]','$_POST[1]');";
	mysqli_query($conn, $sql);
	echo "Dodano ".mysqli_affected_rows($conn)." wierszy.</br>";
echo "Dodano wiersz: INSERT INTO samoloty(id, typ, linie) VALUES (null,".$_POST[0].", ".$_POST[1].");</br>";
	mysqli_close($conn);
	
}

}




?>	
</div>

<div id="prawy2">
<h2>Zapraszamy wszystkich</h2>
<ol>
			<li>właścicieli psów</li>
			<li>weterynarzy</li>
			<li>tych, co chcą kupić psa</li>
			<li>tych, co lubią psy</li>
		</ol>
		<a href="regulamin.html">Przeczytaj regulamin forum</a>
</div>

<div id="stopka">
Stronę wykonał: 01234567890
</div>



</body>
</html>