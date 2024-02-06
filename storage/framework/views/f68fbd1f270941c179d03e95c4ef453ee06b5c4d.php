<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> <?php echo e($quiz->title); ?> icin yeni soru olustur <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('questions.store',$quiz->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Soru</label>
                    <textarea type="text" name="question" class="form-control" rows="4" value=" <?php echo e(old('question')); ?>"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Fotograf</label>
                   <input type="file" name="image" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>1. Cevap</label>
                            <textarea type="text" name="answer1" class="form-control" rows="2" value=" <?php echo e(old('answer1')); ?>"  ></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>2. Cevap</label>
                            <textarea type="text" name="answer2" class="form-control" rows="2" value=" <?php echo e(old('answer2')); ?>"  ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>3. Cevap</label>
                            <textarea type="text" name="answer3" class="form-control" rows="2" value=" <?php echo e(old('answer3')); ?>"  ></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>4. Cevap</label>
                            <textarea type="text" name="answer4" class="form-control" rows="2" value=" <?php echo e(old('answer4')); ?>"  ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                   <label for="">Dogru Cevap</label>
                   <select name="correct_answer" class="form-control">
                       <option <?php if(old('correct_answer')==='answer1'): ?> selected <?php endif; ?> value="answer1">1. Cevap</option>
                       <option <?php if(old('correct_answer')==='answer2'): ?> selected <?php endif; ?> value="answer2">2. Cevap</option>
                       <option <?php if(old('correct_answer')==='answer3'): ?> selected <?php endif; ?> value="answer3">3. Cevap</option>
                       <option <?php if(old('correct_answer')==='answer4'): ?> selected <?php endif; ?> value="answer4">4. Cevap</option>
                   </select>
                </div>

                <div class="form-group">
                   <button type="submit" class="btn btn-success btn-sm btn-block">Soru Olustur</button>
                </div>
            </form>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\Desktop\cvproje\cvarastirma\resources\views/admin/question/create.blade.php ENDPATH**/ ?>