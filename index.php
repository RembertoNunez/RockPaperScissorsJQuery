<html>
	<head>
		<title>Rock Paper Scissors</title>
		<link rel="stylesheet" type="text/css" href="rps.css">
		<script language="javascript" type="text/javascript" src="rps.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				init();
				
				$("#btnGo").click(function() {
					go();
				});
				
				$("#btnRock").click(function() {
					select('rock');
				});
				
				$("#btnPaper").click(function() {
				    select('paper');
				});
				
				$("#btnScissors").click(function() {
				    select('scissors');
				});
				
				$("#btnStart").click(function() {
				    startGame();
				});
				
				$("#btnReplay").click(function() {
				    replay();
				});
				
			});
		</script>
	</head>
	<body>
		<div id="gameWindow">
			
			<div id="introScreen">
				<div id="introScreenContent">
					<h1>Rock Paper Scissors</h1>
					<div id="btnStart" class="button">Start Game</div>
				</div>
			</div>
			
			<div id="endScreen">
				<div id="endScreenContent">
					<h2 id="txtEndTitle">Something beats Something</h2>
					<h2 id="txtEndMessage">You Win, Lose, or Tie</h2>
					<div id="btnReplay" class="button">Play Again</div>
				</div>
			</div>
			
			<div id="btnGo">GO</div>

			<div id="playerPanel">
				<h2>Player</h2>
				<img id="imgPlayer" src="images/question.png">
				<br><br>
				<div id="btnRock" class="iconButton">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="btnPaper" class="iconButton">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="btnScissors" class="iconButton">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			<div id="computerPanel">
				<h2>Computer</h2>
				<img id="imgComputer" src="images/question.png">
				<br><br>
				<div id="lblRock" class="iconLabel">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="lblPaper" class="iconLabel">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="lblScissors" class="iconLabel">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>
			
		</div>
	</body>
</html>