<html>
<head>
<link href="styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bad+Script|Cookie|Gloria+Hallelujah|Gochi+Hand|Niconne|Pacifico|Pattaya|Permanent+Marker|Playball|Rock+Salt|Shadows+Into+Light+Two" rel="stylesheet">
<title>Aplikasi Penukar Bilangan.ANA.</title>
</head>
<body>
<h1 class="gochi" align="center">Aplikasi Pertukaran Bilangan</h1>
<div id="pagehome">

	<?php
	/**
	* Aplikasi Penukar Bilangan
	* Aprilia Nur A'ini
	*/
	class Swap 
	{
		
		public $a;
		public $b;

		public function tukar($a,$b){
			$a = $a+$b; 
			$b = $a-$b;
			$a = $a-$b;

			echo "<p class='txt1'>Bilangan 1: ".$a."</p>";
			echo "<p class='txt1'>Bilangan 2: ".$b."</p>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}

	}

	?>
	<form action='' method='post'>
			<p class="txt">Bilangan 1 : <input class="bil" type='text' name='a' placeholder='isi bilangan pertama'/></p>
			<p class="txt">Bilangan 2 : <input class="bil" type='text' name='b' placeholder='isi bilangan kedua'/></p>
			<input class="tukar" type='submit' name='swap' value='Tukar'/>
	</form>

	<?php
	if(isset($_POST['swap'])){
		$a = $_POST['a'];
		$b = $_POST['b'];
		$swap = new Swap(); //instansiasi class Swap
		echo "<table>";
		echo "<tr>";
		echo "<td>";
		echo "<p class='txt'>Bilangan awal</p>";
		echo "<p class='txt'>Bilangan 1: ".$a."</p>";
		echo "<p class='txt'>Bilangan 2: ".$b."</p>";
		echo "</td>";
		echo "<td>";
		echo "<p class='txt1'>Setelah ditukar</p>";
		echo $swap->tukar($a,$b)."<br>";
	}

	?>
</div>
<br>
<div id="pagehome1">
	<p class="txt1" align="center">04.09.2016</p>
</div>
</body>
</html>