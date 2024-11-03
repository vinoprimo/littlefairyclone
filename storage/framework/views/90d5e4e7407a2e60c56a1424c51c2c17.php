<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <div id="homeview"></div>
        
        <script>
        // Ambil token CSRF dari meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log("CSRF Token: ", csrfToken); // Tampilkan di console
    </script>
    
    </body>
</html>
<?php /**PATH C:\laragon\www\Project Coding\Laravel+Vue\littlefairyflorist\resources\views/app.blade.php ENDPATH**/ ?>