<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>var rota4 = "<?php echo e(route('resetPass')); ?>";
            var GET = "<?php echo $_GET['token'] ?>";
            
            </script>
</head>

<body>
    <a href="<?php echo e(route('index')); ?>">
        <div class="back-black">
            <img class="arrow-black" src="src/arrow.png" alt="Voltar">
            <p class="back-text-black">Voltar</p>
        </div>
    </a>
    <div class="cadastro">
        <div class="form">
            <form method="post" onsubmit="testPass(event)" id='myForm'>
            <h1 id='box'>Digite a senha</h1>
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="password" minlength="6" maxlength="16" name='password' id='password' class="input" autocomplete="off" required>
                    <label id='labelPassword'>Nova senha</label>
                </div>
                <div class="input-group">
                    <input type="password" minlength="6" maxlength="16" name='passwordR' id='passwordR' class="input" autocomplete="off" required>
                    <label id='labelPasswordR'>Repita a Senha</label>
                </div>
                <input type="submit" class="send">
            </form>
        </div>
    </div>
    <div id="alerta">
        <div id="certo"></div>
        <h1></h1>
        <p></p>
        <a id="close">Tudo bem</a>
    </div>
</body>
<script src="<?php echo e(URL::asset('src/script.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/reset.blade.php ENDPATH**/ ?>