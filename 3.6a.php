<!DOCTYPE html>
<html>
    <head>
        <style>
		
		.button {
			box-shadow:inset 0px 0px 0px 0px #97c4fe;
			background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
			background-color:#3d94f6;
			border-radius:13px;
			border:1px solid #337fed;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:20px;
			font-weight:bold;
			padding:6px 31px;
			text-decoration:none;
			text-shadow:0px 0px 0px #1570cd;
		}
		.button:hover {
			background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
			background-color:#1e62d0;
		}
		.button:active {
			position:relative;
			top:1px;
		}
		
		body {
			height: 10%;
		}

		body {
			margin: 0;
			background: linear-gradient(45deg, #49a09d, #5f2c82);
			font-family: sans-serif;
			font-weight: 100;
		}

		h1 {
			text-align: center;
			margin-left: 150px;
			margin-right: 150px;
			font-size: 2vw;
			font-weight: 900;
			background-color: linear-gradient(45deg, #49a09d, #5f2c82);
			color: #fff;
			display: block;
			padding: .1em;
		}

		table {
			text-align:center;
			width: 900px;
			border-collapse: collapse;
			
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 370px;
			margin-top: auto;
			box-shadow: 0 0 100px rgba(0,0,0,0.2);
		}
		

		td {
			text-align:center;
			padding: 15px;
			background-color: rgba(255,255,255,0.2);
			color: #fff;
		}

		th {
			text-align:center;
			padding: 15px;
			position: sticky;
			top: 0;
			background-color: rgba(255,255,255,1);
			color: #000;
		}
		
		</style>   
    </head>
<body>
	<h1>○ Depanatorii cu numarul de devize cu finalizare in <?php $luna = $_POST['luna']; echo $luna?> 2019:</h1>
    <div> 
<?php
		$luna = $_POST['luna'];
		echo "<table>";
		echo "<tr><th>Nume</th><th>Numar devize</th></tr>";
		
		class TableRows extends RecursiveIteratorIterator { 
			 function __construct($it) { 
				 parent::__construct($it, self::LEAVES_ONLY); 
			 }

			 function current() {
				 return "<td>" . parent::current(). "</td>";
			 }

			 function beginChildren() { 
				 echo "<tr>"; 
			 } 

			 function endChildren() { 
				 echo "</tr>" . "\n";
			 } 
		} 
		include "connect_db.php";
		try {
			 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 $stmt = $conn->prepare("SELECT pers.nume, COUNT(dev.id_d) 
					FROM Persoana pers JOIN Deviz dev ON (pers.id = dev.id_depanator)
					WHERE data_finalizare BETWEEN STR_TO_DATE('1-".$luna."-2019', '%e-%b-%Y') AND STR_TO_DATE('30-".$luna."-2019', '%e-%b-%Y')
					GROUP BY pers.nume"); 
			 $stmt->execute();
			 $result1 = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
			 foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
				echo $v;
			 }
		}
		catch(PDOException $e) {
			 echo "Error: " . $e->getMessage();
		}
		$conn = null;
		$link='ui_3.6a.php';
		$button='button';
		echo "<a style=\"margin-left:-10px;position: sticky; top: 10px;\" href='".$link."'class='".$button."'>Inapoi</a>";
		echo "</table>";
?>  
		
	</div>
</body>
</html>