<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        Quizler
     <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-right">
                <a href="<?php echo e(route('quizzes.create')); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz olustur</a>
            </h5>
            <form action="" method="GET">
                <div class="form-row">
                    <div class="col-md-2">
                        <input type="text" name="title" value="<?php echo e(request()->get('title')); ?>" placeholder="Quiz Adi" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" onchange="this.form.submit()" name="status">
                            <option value="">Durum Seciniz</option>
                            <option <?php if(request()->get('status')=='publish'): ?> selected <?php endif; ?> value="publish">Aktif</option>
                            <option <?php if(request()->get('status')=='passive'): ?> selected <?php endif; ?> value="passive">Pasif</option>
                            <option <?php if(request()->get('status')=='draft'): ?> selected <?php endif; ?> value="draft">Taslak</option>
                        </select>
                    </div>
                    <?php if(request()->get('title') || request()->get('status')): ?>
                        <div class="col-md-2">
                            <a href="<?php echo e(route('quizzes.index')); ?>" class="btn btn-secondary">Sifirla</a>
                        </div>
                    <?php endif; ?>
                </div>
            </form>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Soru sayisi</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitis Tarihi</th>
                    <th scope="col">Islemler</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($quiz->title); ?></td>
                        <td><?php echo e($quiz->questions_count); ?></td>
                        <td>
                            <?php switch( $quiz->status):
                                case ('publish'): ?>
                                    <?php if(!$quiz->finished_at): ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php elseif( $quiz->finished_at > now()): ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge badge-secondary text-white">Tarihi Dolmus</span>
                                    <?php endif; ?>
                                <?php break; ?>
                                <?php case ('passive'): ?>
                                    <span class="badge badge-danger">Pasif</span>
                                <?php break; ?>
                                <?php case ('draft'): ?>
                                    <span class="badge badge-warning">Taslak</span>
                                <?php break; ?>



                            <?php endswitch; ?>

                        </td>
                        <td><span title="<?php echo e($quiz->finished_at); ?>">
                            <?php echo e($quiz->finished_at ? $quiz->finished_at->diffForHumans() : ' '); ?>

                            </span>
                        </td>
                        <td>
                            <a href="<?php echo e(route('quizzes.details',$quiz->id)); ?>" class="btn btn-sm btn-secondary">
                                <i class="fa fa-info-circle"></i>
                            </a>
                            <a href="<?php echo e(route('questions.index',$quiz->id)); ?>" class="btn btn-sm btn-warning">
                                <i class="fa fa-question"></i>
                            </a>
                            <a href="<?php echo e(route('quizzes.edit',$quiz->id)); ?>" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="<?php echo e(route('quizzes.destroy',$quiz->id)); ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <?php echo e($quizzes->withQueryString()->links()); ?>

        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\Desktop\cvproje\cvarastirma\resources\views/admin/quiz/list.blade.php ENDPATH**/ ?>