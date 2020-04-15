function dropdownMenuHeader() {
  var btnDropdownMenu = document.querySelector('#dropdownToggle');

  if(btnDropdownMenu !== null) {
    btnDropdownMenu.onclick = function() {
      var dropdownMenu = document.querySelector('#myDropdown');
      dropdownMenu.classList.toggle('dropdownMenuActive');
    }
  } else {
    return false;
  }
}
dropdownMenuHeader();