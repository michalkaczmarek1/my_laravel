<?php $__env->startSection('content'); ?>

	<div class="row">

        <div class="col-md-12">
			<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="video-index">
				<h3>Ostatnia dodana drużyna</h3>
					<a href="<?php echo e(url('teams', $team->id)); ?>"><h3><?php echo e($team->name); ?></h3></a>
					<p><?php echo e(str_limit($team->description, $Limit=365)); ?></p>
					<iframe width="410" height="280" src="<?php echo e($team->embed); ?>?showinfo=0" frameborder="0"></iframe>
					<p><?php echo e(str_limit($team->embed_desc, $limit=150)); ?></p>
					<p id="add-date-team-index">Data dodania:&nbsp;<?php echo e($team->created_at); ?></p>
					<p id="edit-date-team-index">Data aktualizacji:&nbsp;<?php echo e($team->updated_at); ?></p>
					<h4 id="name-team-index">Dodał:&nbsp;<?php echo e($team->user->name); ?></h4>
				</div>
					
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="video-index" id="video-index">
				<h3>Ostatni dodany zawodnik</h3>
					<a href="<?php echo e(url('players', $player->id)); ?>"><h3><?php echo e($player->name); ?></h3></a>
					<p><?php echo e(str_limit($player->description, $limit=365)); ?></p>
					<iframe width="410" height="280" src="<?php echo e($player->embed); ?>?showinfo=0" frameborder="0"></iframe>
					<p><?php echo e(str_limit($player->embed_desc, $limit=150)); ?></p>
					<p id="add-date-player-index">Data dodania:&nbsp;<?php echo e($player->created_at); ?></p>
					<p id="edit-date-player-index">Data aktualizacji:&nbsp;<?php echo e($player->updated_at); ?></p>
					<h4 id="name-player-index">Dodał:&nbsp;<?php echo e($player->user->name); ?></h4>
				</div>
					
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>