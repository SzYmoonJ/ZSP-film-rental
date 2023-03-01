<html lang="pl-PL">
	<head>
	    <link rel="stylesheet" href="../css/style.css">
		<?php
			include "../includes/header.php";
			$_SESSION["site_id"]=2;
			$_SESSION["loged"]=0;
		?>
	</head>
	<body>
		<center>
			<div class="main" style="width: 500px">
				<?php
					include "../includes/nav.php";
				?>
				<form method="POST">
					<h2>Logowanie:</h2>
						<div class="container"><br> Email: <input name="email"></div>
						<div class="container"><br> Haslo: <input name="pass" type="password"><br></div>
						<div class="container"><button type="submit">Login</button></div>
				</form> 
				<?php
					$con = new mysqli("127.0.0.1","root","","film-rental");
					if (isset($_POST["email"]) && isset($_POST["pass"])){
						if($_POST['email'] && $_POST['pass']!=NULL) {
							$t = "SELECT id FROM users WHERE email='".$_POST["email"]."' AND password='".$_POST["pass"]."'";
							$res = $con->query($t);
							$id = $res->fetch_all(MYSQLI_ASSOC);
							if (count($id)>0){
									$q = "SELECT is_admin FROM users WHERE email='".$_POST["email"]."' AND password='".$_POST["pass"]."'";
									$re = $con->query($q);
									$isadm = $re->fetch_all(MYSQLI_ASSOC);
									$_SESSION["isadm"] = $isadm;
									$_SESSION["user_email"] = $_POST["email"];
									$_SESSION["user_id"] = $id;
									$_SESSION["loged"] = 1;
									header("location: ../index.php?page=1");
							}
							else{
								print("Nieprawidłowy login lub hasło");
							}
						}
					}
					include "../includes/footer.php";
				?>
			</div>
		</center>
	</body>
</html>