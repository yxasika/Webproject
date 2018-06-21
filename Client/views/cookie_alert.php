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
<div class="modal fade" id="cookieModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLongTitle">Cookie Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Cookie Policy for Dpad</h1>

                <p>This is the Cookie Policy for Dpad, accessible from Dpad.com</p>

                <p><strong>What Are Cookies</strong></p>

                <p>As is common practice with almost all professional websites this site uses cookies, which are tiny
                    files that are downloaded to your computer, to improve your experience. This page describes what
                    information they gather, how we use it and why we sometimes need to store these cookies. We will
                    also share how you can prevent these cookies from being stored however this may downgrade or 'break'
                    certain elements of the sites functionality.</p>

                <p>For more general information on cookies see the Wikipedia article on HTTP Cookies.</p>

                <p><strong>How We Use Cookies</strong></p>

                <p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no
                    industry standard options for disabling cookies without completely disabling the functionality and
                    features they add to this site. It is recommended that you leave on all cookies if you are not sure
                    whether you need them or not in case they are used to provide a service that you use.</p>

                <p><strong>Disabling Cookies</strong></p>

                <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser
                    Help for how to do this). Be aware that disabling cookies will affect the functionality of this and
                    many other websites that you visit. Disabling cookies will usually result in also disabling certain
                    functionality and features of the this site. Therefore it is recommended that you do not disable
                    cookies.</p>


                <p><strong>The Cookies We Set</strong></p>

                <ul>

                    <li>
                        <p>Account related cookies</p>
                        <p>If you create an account with us then we will use cookies for the management of the signup
                            process and general administration. These cookies will usually be deleted when you log out
                            however in some cases they may remain afterwards to remember your site preferences when
                            logged out.</p>
                    </li>

                    <li>
                        <p>Login related cookies</p>
                        <p>We use cookies when you are logged in so that we can remember this fact. This prevents you
                            from having to log in every single time you visit a new page. These cookies are typically
                            removed or cleared when you log out to ensure that you can only access restricted features
                            and areas when logged in.</p>
                    </li>


                    <li>
                        <p>Site preferences cookies</p>
                        <p>In order to provide you with a great experience on this site we provide the functionality to
                            set your preferences for how this site runs when you use it. In order to remember your
                            preferences we need to set cookies so that this information can be called whenever you
                            interact with a page is affected by your preferences.</p>
                    </li>

                </ul>

                <p><strong>Third Party Cookies</strong></p>

                <p>In some special cases we also use cookies provided by trusted third parties. The following section
                    details which third party cookies you might encounter through this site.</p>

                <ul>


                </ul>

                <p><strong>More Information</strong></p>

                <p>Hopefully that has clarified things for you and as was previously mentioned if there is something
                    that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it
                    does interact with one of the features you use on our site. <a
                            href="https://cookiepolicygenerator.com">This Cookies Policy was created with the help of
                        the CookiePolicyGenerator.com</a></p>

                <p>However if you are still looking for more information then you can contact us through one of our
                    preferred contact methods:</p>

                <ul>
                    <li>Email: dpad@gmail.com</li>

                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="cookieAlert" class="alert alert-dark fixed-bottom countainer-fluid" role="alert">
    <div class="row">
        <div class="col-lg-12">
            <strong>A wild cookie appears!</strong> This website uses cookies to ensure you get the best experience on
            our website.
            <button onclick="alertClosed()" type="button" class="btn btn-primary float-right" data-dismiss="alert">
                OK
            </button>
            <button type="button" class="btn btn-primary float-right mr-2" data-toggle="modal" data-target="#cookieModalLong">
                Show Cookie Policy
            </button>
        </div>
    </div>
</div>

<script src="../scripts/cookie.js" charset="utf-8"></script>
</body>
</html>
