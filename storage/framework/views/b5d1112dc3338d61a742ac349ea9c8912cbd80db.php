<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Snooker</title>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery.lavalamp.css')); ?>">
	<link type="text/css" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen" />
	<script src="<?php echo e(URL::asset('js/jQuery3.2.1.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/jquery.lavalamp.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
</head>
<body>

<div class="container">
	<header class="menu">
		<nav>
			<ul class="nav-menu" id="top">
				<li class="active" id="start"><a href="index.html" class="bookmark" >Start</a></li>
				<li><a href="/season" class="bookmark">Sezon 2016/2017</a></li>
				<li><a href="/history" class="bookmark">Historia</a></li>
				<li><a href="/players" class="bookmark">Zawodnicy</a></li>
				<li id="best"><a href="/teams" class="bookmark">Drużyny</a></li>
			</ul>
		</nav>
	</header>

	<div class="main-content">

		<?php echo $__env->yieldContent('content'); ?>
		
	</div>
	<div class="menu down-menu">
		<nav>
			<ul class="nav-menu" id="footer">
				<li><a href="http://www.worldsnooker.com/" target="_blank" id="wsnooker"><img src="img/wsnooker.jpg" alt="worldsnooker" id="wsnooker2"></a></li>
				<li><a href="http://www.flashscore.pl/snooker/" target="_blank" id="score"><img src="img/score.jpg" alt="scoresnooker" id="score2"></a><li>
				<li><a href="http://snooker.pl/aktualnosci/" target="_blank" id="logo2"><img src="img/logo2.png" alt="plsnooker" id="logo3"></a></li>
			</ul>
		</nav>
		<p id="copy">&copy; Snooker.eu</p>
	</div>
</div>

</body>
</html>