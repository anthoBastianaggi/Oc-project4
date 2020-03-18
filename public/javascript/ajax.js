var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
    if(this.readyState == 4) {
      if(this.status >= 200 && this.status <300) {
          function success() {
            console.log(this.responseText);
          }
      } else {
          error(this.status, this.statusText);
      }
    }
}
xhr.open('GET', 'ajax?action=ajax', true); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
xhr.send();

function get(url, data, success, error) {
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
}