<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        Anasayfa
     <?php $__env->endSlot(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="list-group">
                <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('quiz.detail',$quiz->slug)); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo e($quiz->title); ?></h5>
                    <small><?php echo e($quiz->finished_at ? $quiz->finished_at->diffForHumans(). ' bitiyor.' : null); ?></small>
                  </div>
                  <p class="mb-1"><?php echo e(Str::limit($quiz->description,100)); ?></p>
                  <small><?php echo e($quiz->questions_count); ?> Soru</small>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-2">
                    <?php echo e($quizzes->links()); ?>

                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Quiz Sonuclari
                </div>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <strong class="badge badge-primary"><?php echo e($result->point); ?></strong>-
                            <a href="<?php echo e(route('quiz.detail',$result->quiz->slug)); ?>">
                            <?php echo e($result->quiz->title); ?></li></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
              </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\cvarastirma\resources\views/dashboard.blade.php ENDPATH**/ ?>