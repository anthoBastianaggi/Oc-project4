function displaySidebarDashboard() {
    var sidebarDashboard = document.querySelector('.sidebar-dashboard');
    var wrapper = document.querySelector('.wrapper');
    var sidebarMenuDashboard = document.querySelector('.menu-dashboard');
    var overlayDashboard = document.querySelector('.overlay-dashboard');

    document.querySelector('#dashboardMenuSidebar').onclick = function() {
        sidebarDashboard.classList.toggle('sidebar-collapse');
        wrapper.classList.toggle('active');
        sidebarMenuDashboard.classList.toggle('active');
        overlayDashboard.classList.toggle('active');
    }

    overlayDashboard.onclick = function() {
        sidebarDashboard.classList.toggle('sidebar-collapse');
        wrapper.classList.toggle('active');
        sidebarMenuDashboard.classList.remove('active');
        overlayDashboard.classList.remove('active');
    }
}