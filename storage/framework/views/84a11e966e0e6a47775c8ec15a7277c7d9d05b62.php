<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">
    <script>var rota5 = "<?php echo e(route('enter')); ?>";</script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    <a href="<?php echo e(route('index')); ?>">
        <div class="back">
            <img class="arrow" src="src/arrow.png" alt="Voltar">
            <p class="back-text">Voltar</p>
        </div>
    </a>
    <div class="login">

        <div class="formLogin">


            <form method="post" onsubmit="validaLogin(event)" id='myForm'>
                <?php echo csrf_field(); ?>
                <h1 id='box'>Login</h1>
                <div class="input-group">

                    <input type="email" name='email' class="input" id="email" autocomplete="off" required>
                    <label id='labelEmail'>Email</label>
                </div>

                <div class="input-group">

                    <input type="password" minlength="6" maxlength="16" name='password' id='password' class="input" autocomplete="off" required>
                    <label id='labelPassword'>Senha</label>
                </div>  
                <div id='check'>
                    <label class="checkC">
                        <input type="checkbox" id='myCheck'>
                        <span class="checkSpan">
                            <svg height="12" width="12" class="svg">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <h3>Mantenha conectado</h3>
                    </label>
                </div>         
                <div class="input-group" id='link'>
                    <a href="<?php echo e(route('forgot')); ?>" class="linkLogin">Esqueceu a senha? Clique aqui!</a>
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
</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/login.blade.php ENDPATH**/ ?>