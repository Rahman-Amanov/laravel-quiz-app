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
            <p class="card-text">
                <h5 class="card-title">
                    <a href="<?php echo e(route('quizzes.index' )); ?>" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Quizlere  Don</a>
                </h5>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            <?php if($quiz->finished_at): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Son Katilim Tarihi
                              <span title="<?php echo e($quiz->finished_at); ?>" class="badge badge-secondary badge-pill"><?php echo e($quiz->finished_at->diffForHumans()); ?></span>
                            </li>
                            <?php endif; ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Soru Sayisi
                                <span class="badge badge-secondary badge-pill"><?php echo e($quiz->questions_count); ?></span>
                              </li>
                              <?php if($quiz->details): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Katilimci Sayisi
                                <span class="badge badge-warning badge-pill"><?php echo e($quiz->details['join_count']); ?></span>
                              </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Ortalama Puan
                              <span class="badge badge-secondary badge-pill"><?php echo e($quiz->details['average']); ?></span>
                            </li>
                            <?php endif; ?>
                          </ul>
                          <?php if(count($quiz->topTen)>0): ?>
                          <div class="card mt-3">
                              <div class="card-body">
                                  <h5 class="card-title">Ilk 10</h5>
                                  <ul class="list-group">
                                  <?php $__currentLoopData = $quiz->topTen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <img class="w-8 rounded-full" src="<?php echo e($result->user->profile_photo_url); ?>">
                                        <strong class="h6"><?php echo e($loop->iteration); ?>.</strong>
                                        <span <?php if(auth()->user()->id==$result->user_id): ?> class="text-success" <?php endif; ?>><?php echo e($result->user->name); ?></span>

                                        <span class="badge badge-success badge-pill"><?php echo e($result->point); ?></span></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              </div>
                          </div>
                          <?php endif; ?>
                    </div>
                    <div class="col-md-8">

                        <?php echo e($quiz->description); ?>

                        <table class="table table-bordered mt-3">
                            <thead>
                              <tr>
                                <th scope="col">Ad Soyad</th>
                                <th scope="col">Puan</th>
                                <th scope="col">Dogru</th>
                                <th scope="col">Yanlis</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $quiz->results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($result->user->name); ?></td>
                                    <td><?php echo e($result->point); ?></td>
                                    <td><?php echo e($result->correct); ?></td>
                                    <td><?php echo e($result->wrong); ?></td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                    </p>


                        </div>
                </div>
        </div>
      </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\cvarastirma\resources\views/admin/quiz/show.blade.php ENDPATH**/ ?>