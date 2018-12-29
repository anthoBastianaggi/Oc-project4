<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - <?= $title; ?></title>
        <?php include_once 'Views/includes/head.php' ?>
    </head>
    <body>
        <header>
            <?php include_once 'Views/includes/header.php' ?>
        </header>
        <main role="main"> 
          
            <?= $content; ?>
            
        </main>    
        <footer class="page-footer font-small special-color-dark pt-4">
            <?php include_once 'Views/includes/footer.php' ?>
        </footer>
    </body>
</html>