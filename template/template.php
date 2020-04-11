<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= ucfirst($page) ?> - <?= $title; ?></title>
        <?php include_once 'views/includes/head/head.php' ?>
    </head>
    <body>
        <div id="root">
            <div class="layout">
                <header>
                    <?php include_once 'views/includes/header/header.php' ?>
                </header>
                <main id="main"> 
                    <?php if(Session::getInstance()->hasFlashes()): ?>
                        <?php foreach(Session::getInstance()->getFlashes() as $type => $message): ?>
                            <div class="alert alert-<?= $type; ?>">
                                <?= $message; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <section>
                        <?= $content; ?>
                    </section>
                </main>    
                <footer id="footer-page" class="page-footer font-small special-color-dark pt-4">
                    <?php include_once 'views/includes/footer/footer.php' ?>
                </footer>
            </div>
        </div>
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='public/javascript/header/header.js'></script>
        <script src='public/javascript/header/sidebar.js'></script>
        <script src='public/javascript/comment/comment.js'></script>
        <script src='public/javascript/main.js'></script>
    </body>
</html>