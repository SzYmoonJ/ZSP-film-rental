<html lang="pl-PL">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<?php
			include "includes/header.php";
			$_SESSION["site_id"]=1;
		?>
	</head>
	<body>
		<center>
			<div class="inMain" style="margin-top:2%; background-color: lightblue; min-height: 500px">
				<div class="navPanel">
					<center>
						<?php
							include "includes/nav.php";
						?>
					</center>
				</div>
				<div class="foot">
					<?php
						include "includes/footer.php";
					?>
				</div>
			</div>
		</center>
	</body>
</html>