<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <script>var rota = "<?php echo e(route('show')); ?>";
            var rota2 = "<?php echo e(route('store')); ?>";  
    </script>
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="<?php echo e(URL::asset('src/script.js')); ?>"></script>
</head>

<body>
    <div class="login">

        <div class="form">


            <form method="post" onsubmit="ValidaName(event)" id='myForm'>
                <?php echo csrf_field(); ?>
                <h1>Login</h1>
                <div class="input-group">

                    <input type="text" minlength="5" maxlength="16" name='name' id='nome' class="input" autocomplete="off" required>
                    <label id='labelNome'>Nome</label>
                </div>

                <div class="input-group">

                    <input type="password" minlength="6" maxlength="16" name='password' id='password' class="input" autocomplete="off" required>
                    <label id='labelPassword'>Senha</label>
                </div>

                <div class="input-group">

                    <input type="email" name='email' class="input" id="email" autocomplete="off" required>
                    <label id='labelEmail'>Email</label>
                </div>
                <img id='error' class="error" src="<?php echo e(URL::asset('src/erro.png')); ?>">
                <img id='certo' class="error" src="<?php echo e(URL::asset('src/certo.png')); ?>">

                

                <input type="submit" class="send">
            </form>
        </div>
    </div>
    
</body>

</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/auth/register.blade.php ENDPATH**/ ?>