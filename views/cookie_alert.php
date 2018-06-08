<?php
if (!isset($_COOKIE["alert"])) {
  $cookieConsent = "alert";
  $cookieConsentValue = false;
  setCookie($cookieConsent, $cookieConsentValue, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="cookieAlert" class="alert alert-dark fixed-bottom countainer-fluid" role="alert">
      <div class="row">
        <div class="col-lg-12">
          <strong>A wild cookie appears!</strong> This website uses cookies to ensure you get the best experience on our website.
          <button onclick="alertClosed()" type="button" class="btn btn-primary float-right" data-dismiss="alert">
            OK
          </button>
        </div>
      </div>
    </div>

        <script src="../scripts/cookie.js" charset="utf-8"></script>
  </body>
</html>
