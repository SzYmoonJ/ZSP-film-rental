<html>
	<head>
		<?php
			include "../includes/header.php";
			$_SESSION["site_id"]=3;
		?>
	</head>
	<body>
		<form method="POST">
			<center>
				<div class="main" style="width: 500px;">
				<?php
					include "../includes/nav.php";
				?>
				<h1>Rejestracja:</h1>
				<div class="container"><br> Imię: <input name="name"></div>
				<div class="container"><br> Nazwisko: <input name="surname"></div>
				<div class="container"><br> Email: <input name="email"></div>
				<div class="container"><br> Hasło: <input name="pass" type="password"><br></div>
				<div class="container"><button type="submit">Register</button></div>
					<?php
						$con = new mysqli("127.0.0.1","root","","film-rental");
						$res = $con->query("SELECT * FROM users");
						$cos = $res->fetch_all();
						if($_POST!=NULL){
							if($_POST['email']!="" && $_POST['pass']!=""){
								$add="INSERT INTO users(`name`, `surname` ,`email`, `password`, `is_admin`) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["pass"]."','0')";
								$con->query($add);
								header('location: login.php');
								}
							}
					?>
				</div>
			</center>
		</form>
	</body>
</html>