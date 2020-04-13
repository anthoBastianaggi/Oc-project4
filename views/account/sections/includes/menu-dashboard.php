<div class="menu-dashboard">
    <aside class="sidebar-dashboard-menu">
        <div class="overlay-dashboard"></div>
        <div class="sidebar-dashboard left sidebar-collapse">
            <div class="sidebar-container">
                <div class="user-panel">
                    <div class="image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="rounded-circle" alt="user-image">
                    </div>
                    <ul class="sidebarMenuUser">
                        <li class="sidebarItemUser">
                            <span class="username"><?= $_SESSION['auth']->firstname ?> <?= $_SESSION['auth']->lastname ?></span>
                        </li>
                        <li class="sidebarItemUser">
                            <span class="role"><?= $role['label'] ?></span>
                        </li>
                    </ul>
                </div>
                <div class="list-sidebar-container">
                    <ul class="list-sidebar">
                        <?php if($_SESSION['auth']->role_id === "1"): ?>
                        <li>
                            <a href="<?= CURRENT_PATH ?>dashboard?action=dashboard" class="nav-link">
                                <i class="fa fa-bar-chart-o"></i>
                                <span class="nav-label">Dashboards</span> 
                            </a>
                        </li>
                        <?php endif; ?>
                        <li> 
                            <a href="<?= CURRENT_PATH ?>profile?action=profile" class="nav-link">
                                <i class="fa fa-user"></i>
                                <span class="nav-label">Profil</span>
                            </a> 
                        </li>
                        <li> 
                            <a href="<?= CURRENT_PATH ?>settings?action=settings" class="nav-link"> 
                                <i class="fa fa-cog"></i>
                                <span class="nav-label">Paramètres</span>
                            </a>
                        </li>
                        <?php if($_SESSION['auth']->role_id === "1"): ?>
                        <li> 
                            <a href="<?= CURRENT_PATH ?>chapter-list?action=chapterList" class="nav-link">
                                <i class="fa fa-list"></i> 
                                <span class="nav-label">Liste des chapitres</span>
                            </a> 
                        </li>
                        <li> 
                            <a href="<?= CURRENT_PATH ?>report-comment?action=reportComment" class="nav-link">
                                <i class="iconify" data-icon="uil-comment-alt-exclamation" data-inline="false"></i>
                                <span class="nav-label">Commentaires signalés</span>
                            </a> 
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <div class="btnDashboardMenu">
        <button id="dashboardMenuSidebar" class="navbar-toggler navbar-toggler-righ" type="button" onclick='displaySidebarDashboard(); return false'>
            <i class="fa fa-bars"></i>
        </button>
    </div>
</div>