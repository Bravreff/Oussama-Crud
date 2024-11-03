<?php $__env->startSection('title'); ?>
update Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(Session::has('error')): ?>
<div class="alert alert-error">
    <?php echo e(Session::get('messages')); ?>

</div>
<?php endif; ?>
<form style="width: 80%; margin:0 auto" method="POST" action="<?php echo e(route('personne.update',$data['id'])); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" class="form-control"name="pr_name" id="name" value="<?php echo e(old('pr_name',$data['name'])); ?>">
      <?php $__errorArgs = ['pr_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="emailHelp" class="form-text  text-danger"><?php echo e($message); ?></small>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prenom</label>
      <input type="text" class="form-control" id="prenom" name="pr_prenom" value="<?php echo e(old('pr_prenom',$data['prenom'])); ?>">
      <?php $__errorArgs = ['pr_prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="emailHelp" class="form-text  text-danger"><?php echo e($message); ?></small>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email"name="pr_email" placeholder="Enter email" value="<?php echo e(old('pr_email',$data['email'])); ?>">
      <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php $__errorArgs = ['pr_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="emailHelp" class="form-text  text-danger"><?php echo e($message); ?></small>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pr_password" value="<?php echo e(old('pr_password',$data['password'])); ?>">
      <?php $__errorArgs = ['pr_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small id="emailHelp" class="form-text  text-danger"><?php echo e($message); ?></small>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">situation active</label>
        <select class="form-select" aria-label="Default select example" name="pr_active">
            <option value="">select sitution</option>
            <option value="1" <?php if(old('pr_active',$data['active'])==1): ?> selected <?php endif; ?>>yes</option>
            <option value="0" <?php if(old('pr_active',$data['active'])==0): ?> selected <?php endif; ?>>no</option>
            <?php $__errorArgs = ['pr_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small id="emailHelp" class="form-text  text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </select>
      </div >
    <div style="margin-top: 10%">
        <button type="submit" class="btn btn-primary">Update personne</button>
    <a href="<?php echo e(url('show')); ?>"   class="btn btn-outline-dark"  type="button"> back to Perssonne Liste</a>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oussama-crud\resources\views/edit.blade.php ENDPATH**/ ?>