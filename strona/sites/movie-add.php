<html lang="pl-PL">
	<head>
		<link rel="stylesheet" href="../css/style.css">
		<?php
			include "../includes/header.php";
			$_SESSION["site_id"]=5;
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
				<form method="POST">
					<div class="rpanel">
						<div class="container">Title:<input name="title"></div>
						<div class="container">Description:<input name="desc"></div>
						<div class="container"><button type="submit">Submit</button></div>
					</div>
				</form>
					<?php
						$con = new mysqli("127.0.0.1","root","","film-rental");

						if($_POST!=NULL){
							if($_POST['title']!="" && $_POST['desc']!=""){
								$madd = "INSERT INTO `movies`(`title`, `description`) VALUES ('".$_POST['title']."','".$_POST['desc']."')";
								$con ->query($madd);
								$inid = $con->insert_id;

								$stat = 0;
								if ($_SESSION["isadm"][0]["is_admin"] == 1) {
									$stat = 1;
								}
								$requestadd = "INSERT INTO `usersmovies`(`users_id`, `movies_id`, `status`) VALUES ('".$_SESSION['user_id'][0]['id']."','".$inid."','".$stat."')";
								$con -> query($requestadd);
							}
						}
					?>
				<div class="foot">
					<?php
						include "../includes/footer.php";
					?>
				</div>
			</div>
		</center>
	</body>
</html>