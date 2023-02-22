<html>
	<head>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<form method="POST">
			<center>
				<div class="main" style="width: 400px; margin-top:10%; background-color: lightblue; ">
				<?php
					include "../includes/header.php";
					$_SESSION["site_id"]=123;
					include "../includes/nav.php";
				?>
				<h1>Dodaj admina:</h1>
				<div class="container"><br> Imię: <input name="name"></div>
				<div class="container"><br> Nazwisko: <input name="surname"></div>
				<div class="container"><br> Email: <input name="email"></div>
				<div class="container"><br> Hasło: <input name="pass" type="password"><br></div>
				<div class="container"><br><input type="submit"></div>
					<?php
						$con = new mysqli("127.0.0.1","root","","film-rental");
						$res = $con->query("SELECT * FROM users");
						$cos = $res->fetch_all();
						if($_POST!=NULL){
							if($_POST['email']!="" && $_POST['pass']!=""){
								$add="INSERT INTO users(`name`, `surname` ,`email`, `password`, `is_admin`) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["pass"]."','1')";
								$con->query($add);
								print("Dodano admina");
								}
							}
					?>
				</div>
			</center>
		</form>
	</body>
</html>