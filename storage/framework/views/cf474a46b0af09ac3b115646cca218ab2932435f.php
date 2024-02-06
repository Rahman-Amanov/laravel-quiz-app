<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> Quiz Guncelle <?php $__env->endSlot(); ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('quizzes.update',$quiz->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Quiz Basligi</label>
                    <input type="text" name="title" class="form-control" value=" <?php echo e($quiz->title); ?>" >
                </div>
                <div class="form-group">
                    <label>Quiz Aciklama</label>
                    <textarea type="text" name="description" class="form-control" rows="4"><?php echo e($quiz->description); ?> </textarea>
                </div>
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option <?php if($quiz->questions_count < 4): ?> disabled <?php endif; ?> <?php if($quiz->status==='publish'): ?> selected <?php endif; ?> value="publish">
                            Aktif
                        </option>
                        <option <?php if($quiz->status==='passive'): ?> selected <?php endif; ?> value="passive">Pasif</option>
                        <option <?php if($quiz->status==='draft'): ?> selected <?php endif; ?> value="draft">Taslak</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="isFinished" <?php if($quiz->finished_at): ?> checked <?php endif; ?> type="checkbox">
                    <label>Bitis Tarihi olacakmi?</label>
                </div>
                <div id="finishedInput" <?php if(!$quiz->finished_at): ?> style="display: none" <?php endif; ?> class="form-group">
                    <label>Bitis Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control" <?php if($quiz->finished_at): ?> value="<?php echo e(date('Y-m-d\TH:i',strtotime($quiz->finished_at))); ?>" <?php endif; ?> >
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Guncelle</button>
                </div>
            </form>
        </div>
    </div>
     <?php $__env->slot('js'); ?> 
        <script>
            $('#isFinished').change(function(){
                if($('#isFinished').is(':checked')){
                    $('#finishedInput').show();
                }
                else
                {
                    $('#finishedInput').hide();
                }
            })
        </script>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Rehman\Desktop\cvproje\cvarastirma\resources\views/admin/quiz/edit.blade.php ENDPATH**/ ?>