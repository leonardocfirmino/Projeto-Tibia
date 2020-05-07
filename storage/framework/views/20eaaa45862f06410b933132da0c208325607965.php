<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(URL::asset('src/style.css')); ?>">

    <title>Bem-Vindo</title>

</head>

<body>

    <div class="flex-center">
            <div class="content">
                <a href="<?php echo e(route('register')); ?>" class="title">JOGUE GRÁTIS</a> 
                <a href="<?php echo e(route('login')); ?>" class="link">Já possui conta ? Clique aqui!</a>
            </div>
    </div>
    <div class="black"></div>
    
</body>

</html><?php /**PATH C:\xampp\htdocs\tibia\resources\views/welcome.blade.php ENDPATH**/ ?>