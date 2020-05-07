<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            background-color: #0583F2;
            background-size: 100% 100%;
            position: relative;
            text-align: center;
            height: 100vh;
        }

        .recovery {
            background-color: #f2f2f2;
            position: relative;
            border-radius: 4px;
            padding: 60px 40px 60px 40px;
            padding-top: 20px;
        }
        h1{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .linkRec{
            position: relative;
            text-decoration: none;
            color:#0583F2;
            font-weight: bold;
            font-size: 16px;
            display: inline-block;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            transition:all 0.3s ease-out;
            z-index: 2;
            top: 25px;
            padding:8px;
            padding-bottom:10px;
            border: 4px solid #0583F2;
        }
        .linkRec:hover{
            transform: scale(1.2,1.2);
            transition:all 0.3s ease-out; 
        }
        .p{
            position: relative;
            font-size:20px;
            font-weight: bold;
        }
        .pLink{
            position: relative;
            display: inline-block;
        }
        .link{
            position: relative;
            display: flex;
        }
        .error{
            top:50px;
            position: relative;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="flex-center">

        <div class="recovery">
            <h1>Recupere sua senha</h1>
            <a class="linkRec" href="<?php echo e($link); ?>">Recuperar senha</a>
            <div class="error">
                <p class="p">O botão não está funcionando ?</p>
                <p class="pLink">Copie este link e cole no seu navegador:</p>
                <a class="link" href="<?php echo e($link); ?>"><?php echo e($link); ?></a>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/email.blade.php ENDPATH**/ ?>