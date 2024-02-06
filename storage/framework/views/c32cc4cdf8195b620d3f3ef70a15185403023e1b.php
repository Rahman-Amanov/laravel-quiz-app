<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <?php echo e($quiz->title); ?>

     <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
                <form method="POST" action="<?php echo e(route('quiz.result',$quiz->slug)); ?>"><?php echo csrf_field(); ?>
                <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <strong>#<?php echo e($loop->iteration); ?> </strong> <?php echo e($question->question); ?>

                <?php if($question->image): ?>
                    <img src="<?php echo e(asset($question->image)); ?>" style="width:50%" class="img-responsive">
                <?php endif; ?>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="<?php echo e($question->id); ?>" id="quiz<?php echo e($question->id); ?>" value="answer1" required>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>1">
                      <?php echo e($question->answer1); ?>

                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo e($question->id); ?>" id="quiz<?php echo e($question->id); ?>" value="answer2" required>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>2" >
                      <?php echo e($question->answer2); ?>

                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo e($question->id); ?>" id="quiz<?php echo e($question->id); ?>" value="answer3" required>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>3" >
                      <?php echo e($question->answer3); ?>

                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo e($question->id); ?>" id="quiz<?php echo e($question->id); ?>" value="answer4" required>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>3" >
                      <?php echo e($question->answer4); ?>

                    </label>
                </div>

                    <hr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button type="submit" class="btn btn-success btn-sm btn-block">Sinavi Bititr</button>
            </form>
        </div>
      </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\Desktop\cvproje\cvarastirma\resources\views/quiz.blade.php ENDPATH**/ ?>