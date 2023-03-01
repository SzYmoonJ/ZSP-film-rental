<html lang="pl-PL">
	<body>
			<?php
				if (isset($_SESSION["loged"])){
					if ($_SESSION["loged"] == 1){
						if ($_SESSION["site_id"] == 1){
							echo '<a href="sites/logout.php">Wyloguj</a><br>';
							echo '<a href="sites/movie-my.php">Moje filmy</a><br>';
							if ($_SESSION["isadm"][0]["is_admin"] == 1){
								echo '<a href="admin/movie-list.php">Lista filmow</a><br>';
								echo '<a href="admin/movie-list.php&">Prosby</a><br>';
								echo '<a href="admin/add-admin.php">Dodaj admina</a><br>';
							}
						}
						else{
							echo '<a href="../index.php">StronaGlowna</a><br>';
							if ($_SESSION["site_id"] == 4){
								echo '<a href="movie-add.php">Dodaj film</a><br>';
							}
						}
					}
					else{
						if ($_SESSION["site_id"] == 1){
							echo'<a href="sites/login.php">Zaloguj</a><br>';
							echo '<a href="sites/register.php">Rejestracja</a><br>';
						}
						else{
							echo '<a href="../index.php">StronaGlowna</a><br>';
							if ($_SESSION["site_id"] == 2){
								echo '<a href="register.php">Rejestracja</a><br>';
							}
							elseif ($_SESSION["site_id"] == 3){
								echo '<a href="login.php">Zaloguj</a><br>';
							}
						}
					}
				}else{
						if ($_SESSION["site_id"] == 1){
							echo'<a href="sites/login.php">Zaloguj</a><br>';
							echo '<a href="sites/register.php">Rejestracja</a><br>';
						}
						else{
							echo '<a href="../index.php">StronaGlowna</a><br>';
							if ($_SESSION["site_id"] == 2){
								echo '<a href="register.php">Rejestracja</a><br>';
							}
							elseif ($_SESSION["site_id"] == 3){
								echo '<a href="login.php">Zaloguj</a><br>';
							}
						}
					}
			?>
	</body>
</body>
</html>