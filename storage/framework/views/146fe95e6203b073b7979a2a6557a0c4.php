

<?php $__env->startSection('content'); ?>
    <h1>Adicionar novo Livro</h1>
    <form action="<?php echo e(route('store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Título:</label>
        <input type="text" name="title" required>
        <label>Autor:</label>
        <input type="text" name="author" required>
        <label>Ano:</label>
        <input type="number" name="year" required>
        <label>Editora:</label>
        <input type="text" name="publisher" required>
        <button type="submit">Adicionar Livro</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Livraria\resources\views/create.blade.php ENDPATH**/ ?>