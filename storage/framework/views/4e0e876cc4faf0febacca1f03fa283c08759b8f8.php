<?php $__env->startSection('content'); ?>

	<div class="video-show">
		<h2><?php echo e($team->name); ?></h2>
		<p><?php echo e($team->description); ?></p>
		<iframe width="680" height="480" src="<?php echo e($team->embed); ?>?showinfo=0" frameborder="0"></iframe>
		<p><?php echo e($team->embed_desc); ?></p>
		<div class="button-show">
			<a href="<?php echo e(action('TeamsController@edit', $team->id)); ?>" class="btn btn-success col-md-2">Edytuj</a><br>
			<a href="<?php echo e(action('TeamsController@index')); ?>" class="btn btn-primary col-md-2" id="button-edit">Powrót</a><br>
		</div>
		<h4 id="info-name">Dodał:&nbsp;<?php echo e($team->user->name); ?></h4>
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>