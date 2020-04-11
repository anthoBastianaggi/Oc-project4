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
                    <section>
                    <div class="wrapper">
                        <?php include_once 'views/account/sections/includes/menu-dashboard.php' ?>
                    </div>
                    <div class="main-panel">
                        <?php if(Session::getInstance()->hasFlashes()): ?>
                            <?php foreach(Session::getInstance()->getFlashes() as $type => $message): ?>
                                <div class="alert alert-<?= $type; ?>">
                                    <?= $message; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    
                        <?= $content; ?>
                    </div>
                </main>    
                <footer id="footer-page" class="page-footer font-small special-color-dark pt-4">
                    <?php include_once 'views/includes/footer/footer.php' ?>
                </footer>
            </div>
        </div>
        <script src='public/javascript/header/sidebar.js'></script>
        <script src='public/javascript/header/sidebar-dashboard.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src='public/javascript/header/header.js'></script>
        <script src='public/javascript/comment/comment.js'></script>
        <script src='public/javascript/main.js'></script>
        <script src='public/javascript/ajax.js'></script>
        <script src='public/javascript/dashboard/chart-number-users.js'></script>
        <script src='public/javascript/dashboard/chart-percent-age.js'></script>
    </body>
</html>