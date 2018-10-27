<!DOCTYPE html>
<html>
<head>
	<title>PHP generator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="index.php" method="get">
				<input type="text" name="count" required="true">
				<select name="color">
					<option value="red">Red</option>
					<option value="blue">Blue</option>
					<option value="random">Random</option>
				</select>
				<input type="submit" name="Go">
			</form>
		</div>
		<div class="row">
			<?php
			if (isset($_GET['count']) && !empty($_GET['count'])) {

				// switch ($_GET['operation']) {

				// 	case "red":
					for ($i=1; $i <= $_GET['count']; $i++) { 
						echo "<div class='block ".$_GET['color']."'>" . $i . "</div>";
					}

					// break;

					// case "blue":
					// for ($i=1; $i <= $_GET['count']; $i++) { 
					// 	echo "<div class='blockblue'>" . $i . "</div>";
					// 	break;
					// }
					// case "random":
					// echo $_GET['a'] * $_GET['b'];
					// break;
				// }
			}
				?>
			</div>
		</div>		
	</body>
	</html>