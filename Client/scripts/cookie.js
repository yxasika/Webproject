closeAlert()

function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

function closeAlert(){
  var cookieValue = getCookie('alert')

  if(cookieValue == 'true'){
   $('#cookieAlert').alert('close')
  }
}

function alertClosed(){
  document.cookie = "alert = true"
}
