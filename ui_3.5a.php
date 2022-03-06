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
			font-weight: 10;
		}

		h1 {
			text-align: center;
			font-size: 3vw;
			font-weight: 900;
			background-color: linear-gradient(45deg, #49a09d, #5f2c82);
			color: #fff;
			display: block;
			padding: .1em;
		}

		table {
			width: 200px;
			border-collapse: collapse;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: auto;
			margin-top: 50px;
		}
		
		p {
			
			padding: 2px;
			color: #fff;
			font-size: 2vw;
			text-align: center;
		}
		
		h2 {
			padding: 15px;
			color: #fff;
			font-size: 1vw;
			text-align: center;
			margin-top: 20px;
		}
		
		td {
			padding: 15px;
			background-color: rgba(255,255,255,0.3);
			color: #fff;
		}

		th {
			padding: 15px;
			background-color: rgba(255,255,255,0.3);
			color: #000;
		}
		
		div {
			margin-top: 130px;
			width: 400px;
			height: 400px;
			padding: 15px;
			border: 25px ridge;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 150px;
			text-align: center;
			box-shadow: 0 0 100px rgba(0,0,0,0.2);
			background-color: rgba(255,255,255,0.2);
		}
		
		</style>   
    </head>
<body>
    <div> 
		<p> Sa se gaseasca detaliile devizelor care au folosit piesa cu descrierea "surub":</p>
		<form method="post" action="3.5a.php">
		<table>
		<tr>
		<th> Piesa </th>
		<td> <input type="text" name="piesa" value="surub"> </td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Acces" >
		</td>
		</tr>
		</table>
		</form>
<?php
	
	$link='meniu.html';
	$button='button';
	echo "<a style=\"margin-left:50px;position: sticky; top: 10px; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: 50px;\" href='".$link."'class='".$button."'>Inapoi</a>";
			
?>  
	
	</div>
</body>
</html>