<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <?php echo e($quiz->title); ?> Quizine ait sorular
     <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-right">
                <a href="<?php echo e(route('questions.create',$quiz->id)); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Soru olustur</a>
            </h5>
            <h5 class="card-title">
                <a href="<?php echo e(route('quizzes.index' )); ?>" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Quizlere  Don</a>
            </h5>
            <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Soru</th>
                    <th scope="col">Fotograf</th>
                    <th scope="col">1. Cevap</th>
                    <th scope="col">2. Cevap</th>
                    <th scope="col">3.cu Cevap</th>
                    <th scope="col">4. Cevap</th>
                    <th scope="col">Dogru Cevap</th>
                    <th scope="col" style="width: 100px;">Islemler</th>
                  </tr>
                  <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($question->question); ?></td>
                        <td>
                            <?php if($question->image): ?>
                                <a href="<?php echo e(asset($question->image)); ?>" class="btn btn-light btn-sm" target="_blank">Goruntule</a>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($question->answer1); ?></td>
                        <td><?php echo e($question->answer2); ?></td>
                        <td><?php echo e($question->answer3); ?></td>
                        <td><?php echo e($question->answer4); ?></td>
                        <td class="text-success"><?php echo e(Str::substr($question->correct_answer, -1)); ?>. Cevap</td>
                        <td>
                            <a href="<?php echo e(route('questions.edit',[$quiz->id,$question->id])); ?>" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="<?php echo e(route('questions.destroy',[$quiz->id,$question->id])); ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </thead>
                <tbody>

                </tbody>
              </table>

        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\cvarastirma\resources\views/admin/question/list.blade.php ENDPATH**/ ?>