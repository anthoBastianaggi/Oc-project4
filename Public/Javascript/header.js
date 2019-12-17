function display(myDropdown) {
    var dropdownMenu = document.getElementById(myDropdown).style.display;
    if (dropdownMenu === "block") 
    {
        document.getElementById(myDropdown).style.display = "none";
    }
    else 
    {
        document.getElementById(myDropdown).style.display = "block";
    }
}
