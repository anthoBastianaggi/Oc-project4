function get(url) {
    return new Promise(function (success, error) {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if(this.readyState == 4) {
            if(this.status >= 200 && this.status <300) {
                success(this.responseText);
            } else {
                error(this.status, this.statusText);
            }
            }
        }
        
        xhr.open('GET', url, true);
        xhr.send();
    });
}
