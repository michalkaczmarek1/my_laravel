<?php $__env->startSection('content'); ?>

<?php if(Session::has('player_created')): ?>
	<div class="alert alert-success">
		<?php echo e(Session::get('player_created')); ?>

	</div>
<?php endif; ?>

	<?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
		<div class="video">
			<a href="<?php echo e(url('players', $player->id)); ?>"><h3><?php echo e($player->name); ?></h3></a>
			<p><?php echo e(str_limit($player->description, $limit=250)); ?></p>
			<iframe width="410" height="280" src="<?php echo e($player->embed); ?>?showinfo=0" frameborder="0"></iframe>
			<p><?php echo e(str_limit($player->embed_desc, $limit=100)); ?></p>
			<p id="add-date-player">Data dodania:&nbsp;<?php echo e($player->created_at); ?></p>
			<p id="edit-date-player">Data aktualizacji:&nbsp;<?php echo e($player->updated_at); ?></p>
			<h4 id="name-player">Dodał:&nbsp;<?php echo e($player->user->name); ?></h4>
		</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>