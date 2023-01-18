<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://dev-cats.github.io/code-snippets/JetBrainsMono.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
		<link rel=icon href=https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15/svgs/solid/robot.svg>
		<title>Dockerized mini-ChatGPT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>


<h1 id="title_typewrite"></h1>
<script src="js/title_anime.js"></script>

<center>

<form action="index.php" method="post">
	<input class="user" type="text"
		name="user_input"
		value="";
		placeholder="Ask whatever you want here!"
		autofocus
		x-webkit-speech>
	<input class="button" type="submit"
		value="Send"
		name="submit">
</form>

<br><br>

<div class="terminal">
	<p class="output">
		<?php
		if(isset($_POST["submit"])) {
			if($_POST["user_input"] != "")
			{
				$user_asks = $_POST["user_input"];
				$user_asks = htmlspecialchars($user_asks, ENT_QUOTES);
				$output = nl2br(shell_exec("./src/chatbash '$user_asks'"));
				echo $output;
				flush();
			}
		}
		?>
	</p>
</div>

<br><br>
<?php
	if(isset($_POST["user_input"] ))
	{
		$user_asks = $_POST["user_input"];
		echo "<p class='user_asks_output' id='user_asks_typewrite'></p>
			<script>
			var i = 0;
			var txt = '$user_asks';
			var speed = 50;
			window.onload = typeWriter;
			function typeWriter() {
			  if (i < txt.length) {
			    document.getElementById('user_asks_typewrite').innerHTML += txt.charAt(i);
			    i++;
			    setTimeout(typeWriter, speed);
			  }
			}
			</script>";
	}
?>

</html>
