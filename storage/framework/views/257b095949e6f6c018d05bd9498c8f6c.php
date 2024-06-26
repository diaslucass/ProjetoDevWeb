

<head>
    <style>
        h1.title{
            font-size:3.5rem;
        }

        .containerform{
            font-family: "Poppins" , sans-serif;
            display:flex;
            flex-direction: column;
            align-items: center;
            line-height: 2;
            font-size: 1.6rem;
            font-weight: bold;
            
        }

        .containerform input{
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            padding: 10px;
            font-family: "Poppins" , sans-serif;
        }

        .containerform button{
            margin: 40px 0px;
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            background-color: #c2e9ff;
            color: #0e1a2d;
            font-size: 1.4rem;
            font-weight: bold;
            cursor: pointer;
        }

        .containerform button:hover{
            background-color: #0e1a2d;
            color: #c2e9ff;
            cursor: pointer;
            border: 2px solid white;
            transition: 0.3s;
        }

    </style>
</head>

<?php $__env->startSection('content'); ?>
    <h1 class="title">Adicionar Novo Livro</h1>
    <form action="<?php echo e(route('store')); ?>" method="POST" class="containerform">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas\Documents\Codigos\Devweb\Livraria\resources\views/create.blade.php ENDPATH**/ ?>