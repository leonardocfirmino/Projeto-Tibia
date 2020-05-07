<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var rota3 = "<?php echo e(route('recovery')); ?>";
    </script>
</head>

<body>
    <a href="<?php echo e(route('login')); ?>">
        <div class="back">
            <img class="arrow" src="src/arrow.png" alt="Voltar">
            <p class="back-text">Voltar</p>
        </div>
    </a>
    <div class="flex-center" id='forg'>

        <div class="forgot" id='fundo'>

            <div class="input-group-forgot" id='group'>
                <h1 class='recup'>Recuperar senha</h1>
                <form method="POST" onsubmit="recovery(event)">
                    <?php echo csrf_field(); ?>
                    <label id='email-forgot'>EMAIL</label>
                    <input type="email" name='email' class="input-forgot" id="email" autocomplete="off" required>
                    <input type="submit" class='submit' value="Enviar">
                </form>
            </div>

        </div>
    </div>
    <div id="alerta">
        <div id="certo"></div>
        <h1></h1>
        <p></p>
        <a id="close">Tudo bem</a>
    </div>
    <div id='black'></div>
</body>
<script src="<?php echo e(URL::asset('src/script.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/forgot.blade.php ENDPATH**/ ?>