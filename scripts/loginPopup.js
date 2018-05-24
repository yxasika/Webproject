$(function () {
    var login = document.getElementById('login-wrapper');
    var register = document.getElementById('register-wrapper');
    window.onclick = function (event) {
        if (event.target == login) {
            login.style.display = "none";
        }
        else if (event.target == register) {
            register.style.display = "none";
        }
    }
});