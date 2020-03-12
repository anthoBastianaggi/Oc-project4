var sidebar = document.querySelector('.sidebarOpen');
var overlay = document.querySelector('.overlay');
var overlayDashboard = document.querySelector('.overlay-dashboard');

document.querySelector('#menuBurgerOpen').onclick = function() {
  sidebar.classList.add('active');
  overlay.classList.add('active');
}

document.querySelector('#menuBurgerClose').onclick = function() {
  sidebar.classList.remove('active');
  overlay.classList.remove('active');
}

overlay.onclick = function() {
  sidebar.classList.remove('active');
  overlay.classList.remove('active');
}

function displayMenuSidebar() {
  var dropdownMenu = document.querySelector('#sidebarDropdownMenu');
  var dropdownMenuList = window.getComputedStyle(dropdownMenu, null).getPropertyValue("display");
  var iconChevron =  document.querySelector('#iconChevron');
  if (dropdownMenuList === "block") {
    document.querySelector('#sidebarDropdownMenu').style.display = "none";
    iconChevron.classList.add('active');
  }
  else {
    document.querySelector('#sidebarDropdownMenu').style.display = "block";
    iconChevron.classList.remove('active');
  }
}

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