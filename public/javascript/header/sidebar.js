var sidebar = document.querySelector('.sidebarOpen');
var overlay = document.querySelector('.overlay');

function displaySidebarOpen() {
  document.querySelector('#menuBurgerOpen').onclick = function() {
    sidebar.classList.add('active');
    overlay.classList.add('active');
  }

  overlay.onclick = function() {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
  }
}

function displaySidebarClose() {
  document.querySelector('#menuBurgerClose').onclick = function() {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
  }
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