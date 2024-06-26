

<?php $__env->startSection('content'); ?>
    <h1>Editar livros</h1>
    <form action="<?php echo e(route('update', $livro->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label>Título:</label>
        <input type="text" name="title" value="<?php echo e($livro->title); ?>" required>
        <label>Autor:</label>
        <input type="text" name="author" value="<?php echo e($livro->author); ?>" required>
        <label>Ano:</label>
        <input type="number" name="year" value="<?php echo e($livro->year); ?>" required>
        <label>Editora:</label>
        <input type="text" name="publisher" value="<?php echo e($livro->publisher); ?>" required>
        <button type="submit">Salvar Livro</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Livraria\resources\views/edit.blade.php ENDPATH**/ ?>