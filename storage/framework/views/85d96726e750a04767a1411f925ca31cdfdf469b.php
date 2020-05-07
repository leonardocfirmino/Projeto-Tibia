<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <script>var rota = "<?php echo e(route('verify')); ?>";
            var rota2 = "<?php echo e(route('store')); ?>";  
    </script>
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
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


            <form method="post" onsubmit="ValidaName(event)" id='myForm'>
                <?php echo csrf_field(); ?>
                <h1 class='h1'>Cadastrar</h1>
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
                <div class="input-group" id='link'>
                    <a href="<?php echo e(route('login')); ?>" class="linkLogin">Já possui conta ? Clique aqui!</a>
                </div>

                <input type="submit" class="send">
            </form>
        </div>
    </div>
    
</body>
<script src="<?php echo e(URL::asset('src/script.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/register.blade.php ENDPATH**/ ?>