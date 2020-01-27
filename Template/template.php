<?php include_once 'Models/class/Session.php' ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= ucfirst($page) ?> - <?= $title; ?></title>
        <?php include_once 'Views/includes/Head/head.php' ?>
    </head>
    <body>
        <div id="root">
            <div class="layout">
                <header>
                    <?php include_once 'Views/includes/Header/header.php' ?>
                </header>
                <main role="main"> 
                    <?php if(Session::getInstance()->hasFlashes()): ?>
                        <?php foreach(Session::getInstance()->getFlashes() as $type => $message): ?>
                            <div class="alert alert-<?= $type; ?>">
                                <?= $message; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                
                    <?= $content; ?>
                    
                </main>    
                <footer id="footer-page" class="page-footer font-small special-color-dark pt-4">
                    <?php include_once 'Views/includes/Footer/footer.php' ?>
                </footer>
            </div>
        </div>
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='Public/javascript/Header/header.js'></script>
        <script src='Public/javascript/Header/sidebar.js'></script>
        <script src='Public/javascript/Comment/comment.js'></script>
    </body>
</html>