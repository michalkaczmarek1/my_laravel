<?php $__env->startSection('content'); ?>

	<div class="video-show">
		<h2><?php echo e($player->name); ?></h2>
		<p><?php echo e($player->description); ?></p>
		<iframe width="680" height="480" src="<?php echo e($player->embed); ?>?showinfo=0" frameborder="0"></iframe>
		<p><?php echo e($player->embed_desc); ?></p>
		<div class="button-show-player">
			<a href="<?php echo e(action('PlayersController@edit', $player->id)); ?>" class="btn btn-success col-md-2">Edytuj</a>
			<a href="<?php echo e(action('PlayersController@index')); ?>" class="btn btn-primary col-md-2" id="button-show">Powrót</a><br>
		</div>
		<h4 id="info-name2">Dodał:&nbsp;<?php echo e($player->user->name); ?></h4>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>