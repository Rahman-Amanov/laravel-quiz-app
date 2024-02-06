<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <?php echo e($quiz->title); ?> Sonucu
     <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <h3>Puan : <strong><?php echo e($quiz->my_result->point); ?></strong></h3>
                <div class="alert bg-warning">
                    <i class="fa fa-circle"></i> İşaretlediğin Şık
                    <i class="fa fa-check text-success"></i> Doğru Cevap
                    <i class="fa fa-times text-danger"></i> Yanlış Cevap
                </div>

                <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($question->correct_answer==$question->my_answer->answer): ?>
                    <i class="fa fa-check text-success"></i>
                <?php else: ?>
                    <i class="fa fa-times text-danger"></i>
                <?php endif; ?>
                <strong>#<?php echo e($loop->iteration); ?> </strong>
                 <?php echo e($question->question); ?>

                <?php if($question->image): ?>
                    <img src="<?php echo e(asset($question->image)); ?>" style="width:50%" class="img-responsive">
                <?php endif; ?>
                <br>
                <small>Bu soruya <strong>% <?php echo e($question->true_percent); ?> </strong> oraninda dogru cevap verildi.</small>
                <div class="form-check mt-2">
                    <?php if('answer1'==$question->correct_answer): ?>
                        <i class="fa fa-check text-success"></i>
                        <?php elseif('answer1'==$question->my_answer->answer): ?>
                        <i class="fa fa-circle"></i>
                     <?php endif; ?>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>1">
                      <?php echo e($question->answer1); ?>

                    </label>
                </div>
                <div class="form-check">
                    <?php if('answer2'==$question->correct_answer): ?>
                    <i class="fa fa-check text-success"></i>
                    <?php elseif('answer2'==$question->my_answer->answer): ?>
                    <i class="fa fa-circle"></i>
                     <?php endif; ?>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>2" >
                      <?php echo e($question->answer2); ?>

                    </label>
                </div>
                <div class="form-check">
                    <?php if('answer3'==$question->correct_answer): ?>
                    <i class="fa fa-check text-success"></i>
                    <?php elseif('answer3'==$question->my_answer->answer): ?>
                    <i class="fa fa-circle"></i>
                     <?php endif; ?>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>3" >
                      <?php echo e($question->answer3); ?>

                    </label>
                </div>
                <div class="form-check">
                    <?php if('answer4'==$question->correct_answer): ?>
                    <i class="fa fa-check text-success"></i>
                    <?php elseif('answer4'==$question->my_answer->answer): ?>
                    <i class="fa fa-circle"></i>

                     <?php endif; ?>
                    <label class="form-check-label" for="quiz<?php echo e($question->id); ?>3" >
                      <?php echo e($question->answer4); ?>

                    </label>
                </div>
                <?php if(!$loop->last): ?>

                <hr>
                <?php endif; ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
      </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\Desktop\cvproje\cvarastirma\resources\views/quiz_result.blade.php ENDPATH**/ ?>