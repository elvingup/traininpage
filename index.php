<?php 
    const URL_SITE = "http://localhost/ProjetoTurma/traininpage/";
    require_once "mobile_device_detect.php";
    $isMobile = mobile_device_detect();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorge Henrique Talento | Developer Full Stack | Blumenau(SC)</title>
    <link rel="stylesheet" href="<?php echo URL_SITE ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE ?>icofont/icofont.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE ?>css/app.css">
</head>
<body>
    
        <?php
            require_once "components/nav.php";
        ?>
    <main class="pb-5">
        

        <div class="container<?php echo ($page == 'home') ? '-fluid p-0' : '' ?>">
                <?php
                    require_once "views/{$page}.php"; //troca a $page sem trocar os components (nav.php e footer.php)
                ?>
        </div>
    
    </main>
 
    <footer class="container-fluid">
        <div class="row">
            <?php require_once "components/footer.php" ?>
        </div>
    </footer>
       
    <script> const URL = "<?php echo URL_SITE ?>" </script>

    <script src="<?php echo URL_SITE ?>js/jquery-3.7.1.min.js"></script>

    <script src="<?php echo URL_SITE ?>js/app.js"></script>

    <script src="<?php echo URL_SITE ?>js/bootstrap.bundle.min.js"></script> //<!-- usa a variavel php para informar o caminho absoluto -->
    // CAMINHO ABSOLUTO    
    // <script src="http://localhost/ProjetoTurma/traininpage/js/bootstrap.bundle.min.js"></script>
    <!-- // <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>