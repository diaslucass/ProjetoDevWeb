

<?php $__env->startSection('content'); ?>
<h1>Detalhes do Livro</h1>
<p>Título <?php echo e($livro->title); ?></p>
<p>Autor: <?php echo e($livro->author); ?></p>
<p>Ano: <?php echo e($livro->year); ?></p>
<p>Editora: <?php echo e($livro->publisher); ?></p>
<a href="<?php echo e(route('index')); ?>">Voltar para a Lista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Livraria\resources\views/show.blade.php ENDPATH**/ ?>