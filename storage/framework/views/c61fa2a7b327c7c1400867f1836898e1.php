<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            font-family:"Poppins", sans-serif;
        }

        .header{
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
            
        }
        table{
            width: 100%;
            border-spacing: 0;
        }
        th{
            height: 40px;
            border: solid 1px gray;
        }
        #btn-add{
            width: auto;
            height: 30px;
        }
        #link-add{
            display:flex;
            align-items: center;
            width: 110px ;
        }
        #link-add h4{
            margin: 0;
            color: black;
        }
        .coluna-div{
            display:flex;
            width: 100%;
            align-items: center;
        }
        .border-table{
            border: solid 1px gray;
        }
        #th-titulo{
            width: 350px;
        }
        #th-autor{
            width: 270px;
        }
        #th-ano{
            width: 140px;
        }
        #th-editora{
            width: 190px;
        }
        .icones-th{
            width: auto;
            height: 25px;
            margin-left: 20px;
            margin-right:4px;
        }
        .icone-action{
            width: auto;
            height: 25px;
            transition: .2s;
        }
        /* Botao DELETE */
        #icone-delete{
            fill: #FF0000;
        }
        #icone-delete:hover{
            fill: #CC0000;
            cursor:pointer;
        }
        #btn-delete{
            border: none;
            background-color: white;
        }
        /* Botao EDIT */
        #icone-edit{
            fill: #1E90FF;
        }
        #icone-edit:hover{
            fill: #1874CC;
        }
        /* Botao INFO */
        #icone-info{
            fill: #FFA500;
            text-decoration: none;
            margin-right: 4px;
        }
        #icone-info:hover{
            fill: #E69500;
        }
        td{
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Livraria</h1>
    </div>
    <?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\Livraria\resources\views/layouts/app.blade.php ENDPATH**/ ?>