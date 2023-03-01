<html>
	<head>
		<link rel="stylesheet" href="../css/style.css">
		<?php
			include "../includes/header.php";
			$_SESSION["site_id"]=7;
		?>
	</head>
	<body>
		<center> 
			<div class="inMain" style="margin-top:2%; background-color: lightblue; ">
				<div class="navPanel">
					<?php
						include "../includes/nav.php";
					?>
				</div>
				<div class="rpanel">
					<?php
						$con = new mysqli('localhost','root','','film-rental');
						$li = 'SELECT movies.id, movies.title, usersmovies.status FROM movies JOIN usersmovies ON usersmovies.movies_id=movies.id';
						$result = $con -> query($li);
						$list = $result -> fetch_all(MYSQLI_ASSOC);
						echo '<table>';
						echo '<tr>';
							echo '<td>';
								echo '<p>Id:</p>';
							echo '</td>';
							echo '<td>';
								echo '<p>Title:</p>';
							echo '</td>';
							echo '<td>';
								echo '<p>Status:</p>';
							echo '</td>';
						echo '</tr>';
							for ($i=0; $i<count($list);$i++){
								echo '<tr>';
								echo	'<td>';
											echo $list[$i]["id"];
								echo	'</td>';
								echo	'<td>';
											echo $list[$i]["title"];
								echo	'</td>';
								echo	'<td>';
											echo "<font style='color: red'>".$list[$i]["status"].'</font>';
								echo	'</td>';
								echo '</tr>';
							};
						echo '</table>'
					?>
				</div>
				<div class="foot">
					<?php
						include "../includes/footer.php";
					?>
				</div>
			</div>
		</center>
	</body>
</html>