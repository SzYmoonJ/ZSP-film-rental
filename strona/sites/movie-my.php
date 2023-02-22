<html>
	<head>
		<?php
			include "../includes/header.php";
			$_SESSION["site_id"]=4;
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
					$li = 'SELECT movies.id, movies.title, movies.description FROM movies JOIN usersmovies ON movies.id=usersmovies.movies_id WHERE usersmovies.users_id="'.$_SESSION["user_id"][0]["id"].'"';
					$result = $con -> query($li);
					$list = $result -> fetch_all(MYSQLI_ASSOC);
					for ($i=0; $i<count($list);$i++){
						echo "Id:".'&nbsp'.$list[$i]["id"].'&nbsp';
						echo $list[$i]["title"].'&nbsp';
						echo "Opis:".'&nbsp'.$list[$i]["description"].'<br> <br>';
					};
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