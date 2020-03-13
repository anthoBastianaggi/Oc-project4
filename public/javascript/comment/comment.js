function removeClassOptionsComment(e, c) {
    elm = document.querySelectorAll('.dropdownOptions');
    for (var i = 0; i < elm.length; i++) {
        if (c == 'active') {
            elm[i].classList.remove('active');
        } else {
            if (!elm[i].classList.contains('active')) elm[i].querySelector('.dropdownListOptions').classList.remove('active');
        }
    }
}
  
var dropdownOptionsComment = document.querySelectorAll('.dropdownOptions');
dropdownOptionsComment.forEach(function(o) {
    o.addEventListener('click', function(e) {
        removeClassOptionsComment(o, 'active');
        this.classList.add('active');
        removeClassOptionsComment(o);
        this.querySelector('.dropdownListOptions').classList.toggle('active');
    });
});

window.onclick = function(event) {
    if (!event.target.matches('.dropdownOptions')) {
        var dropdown = document.getElementsByClassName("dropdownListOptions");
        for (i = 0; i < dropdown.length; i++) {
            if (dropdown[i].classList.contains('active')) {
                dropdown[i].classList.remove('active');
            }
        }
    }
}