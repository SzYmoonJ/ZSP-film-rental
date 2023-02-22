<html lang="pl-PL">
	<head>
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
						<div class="container"><label>Title:</label><input name="title"></div>
						<div class="container"><label>Description:</label><input name="desc"></div>
						<div class="container"><button type="submit">Submit</button></div>
					</div>
				</form>
				<div class="foot">
					<?php
						include "../includes/footer.php";
					?>
				</div>
			</div>
		</center>
	</body>
</html>