

<head>
    <style>
        h1.title {
            font-size: 3.5rem;
        }

        .containerform {
            font-family: "Poppins", sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            line-height: 2;
            font-size: 1.6rem;
            font-weight: bold;

        }

        .containerform input {
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            padding: 10px;
            font-family: "Poppins", sans-serif;
        }

        .containerform button {
            margin: 40px 0px;
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 1.4rem;
            font-weight: bold;
            cursor: pointer;
        }

        .contentp{
            width: 300px;
            height: 30vh;
            
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .P {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .voltar{
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0px;
            text-align:center;
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


        
        .voltar:hover{
            background-color: #0e1a2d;
            color: #c2e9ff;
            cursor: pointer;
            border: 2px solid white;
            transition: 0.3s;
        }
    </style>
</head>

<?php $__env->startSection('content'); ?>
<h1 class="title">Detalhes do Livro</h1>
<div class="contentp">
    <p class="P">Título: <?php echo e($livro->title); ?></p>
    <p class="P">Autor: <?php echo e($livro->author); ?></p>
    <p class="P">Ano: <?php echo e($livro->year); ?></p>
    <p class="P">Editora: <?php echo e($livro->publisher); ?></p>
</div>

<a href="<?php echo e(route('index')); ?>" class="voltar">Voltar para a Lista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucas\Documents\Codigos\Devweb\Livraria\resources\views/show.blade.php ENDPATH**/ ?>