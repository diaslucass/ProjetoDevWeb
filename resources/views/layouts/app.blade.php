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
            min-height:100vh;
            color: #c2e9ff;
            background-color: #0e1a2d;
        }

        svg{
            fill: #c2e9ff;
        }

        .header{
            background-color: #183550;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
            
        }

        .containerApp{
            width: 100%;
            height: 70vh;
            display: flex;
            align-items:center;
            flex-direction: column;
        }

        table{
            width: 75%;
            border-spacing: 0;
            border-collapse: collapse;
            margin: 30px 0px;
        }

        .containerApp form{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }


        
        th{
            height: 40px;
            border: solid 1px gray;
            border:3px solid #c2e9ff;
            
        }

        .filters{
            height: 40px;
            width: 7%;
            display:flex;
            justify-content: space-evenly;
            /* border:5px solid */
        }

        #btn-add{
            width: auto;
            height: 50px;
        }
        #link-add{
            display:flex;
            align-items: center;
            width: 100% ;
            justify-content: center;
            gap: 2%;
            font-size: 3.5rem;
            color: black;
            text-decoration: none;
            
        }


        #link-add h4{
            margin: 20px 0px;
            color: #c2e9ff;
            text-align:center;
        }
        .coluna-div{
            display:flex;
            width: 100%;
            justify-content:center;
            align-items: center;
        }
        .border-table{
            border: solid 3px #c2e9ff;
        }
        #th-titulo{
            width: 29%;
        }
        #th-autor{
            width: 24%;
        }
        #th-ano{
            width: 20%;
        }
        #th-editora{
            width: 20%;
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
            background-color: transparent;
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
            padding: 5px ;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Livraria</h1>
    </div>
    <div class="containerApp">
        @yield('content')
    </div>
    

</body>
</html>