<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOTTO Ekstraklasa</title>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
	<link type="text/css" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen" />
	<script src="<?php echo e(URL::asset('js/jQuery3.2.1.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
</head>
<body>

<div class="container1">
	<header class="menu1">
		<nav>
			<ul class="naw-menu col-md-12">
				<li class="bookmark"><a href="/index">Start</a></li>
				<li class="bookmark"><a href="/season">Sezon 2016/2017</a></li>
				<li class="bookmark"><a href="/history">Historia</a></li>
				<li class="bookmark"><a href="/players">Zawodnicy</a></li>
				<li class="bookmark"><a href="/teams">Drużyny</a></li>
			</ul>
		</nav>
		<div class="button2">
			<li><a href="/register" class="btn btn-lg">Rejestracja</a></li>
			<li><a href="/login" class="btn btn-lg">Logowanie</a></li>
		</div>
	</header>

	<div class="main-contentcont row">

		<?php echo $__env->yieldContent('content'); ?>
		
	</div>
	<div>
		<ul class="button naw-menu">
			<li><a href="/teams/create" class="btn btn-lg">Dodaj drużynę</a></li>
			<li><a href="/players/create" class="btn btn-lg">Dodaj zawodnika</a></li>
		</ul>
	</div>
</div>

</body>
</html>