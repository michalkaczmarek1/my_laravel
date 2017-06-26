<?php $__env->startSection('content'); ?>

<?php if(Session::has('teams_created')): ?>
	<div class="alert alert-success">
		<?php echo e(Session::get('teams_created')); ?>

	</div>
<?php endif; ?>

	<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div class="col-md-lg-1">
		<div class="video">
			<a href="<?php echo e(url('teams', $team->id)); ?>"><h3><?php echo e($team->name); ?></h3></a>
			<p><?php echo e(str_limit($team->description, $limit=250)); ?></p>
			<iframe width="410" height="280" src="<?php echo e($team->embed); ?>?showinfo=0" frameborder="0"></iframe>
			<p><?php echo e(str_limit($team->embed_desc, $limit=100)); ?></p>
			<p id="add-date-team">Data dodania:&nbsp;<?php echo e($team->created_at); ?></p>
			<p id="edit-date-team">Data aktualizacji:&nbsp;<?php echo e($team->updated_at); ?></p>
			<h4 id="name-team">Dodał:&nbsp;<?php echo e($team->user->name); ?></h4>
		</div>
	</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>