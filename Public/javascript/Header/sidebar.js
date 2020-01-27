var sidebar = document.querySelector('.sidebarOpen');
var overlay = document.querySelector('.overlay');

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
  var dropdownMenuList = document.querySelector('#sidebarDropdownMenu').style.display;
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
