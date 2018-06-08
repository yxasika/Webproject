<div id="login-wrapper" class="modali">
    <div class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login-wrapper').style.display='none'" class="close"
                  title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Log In</h1>
        </div>
        <form class="container" method="post" action=""/>
            <input type="text" placeholder="Enter your Email" name="email"/>
            <input type="password" placeholder="Enter Password" name="password"/>
            <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit" name="login">Log In</button>
            <input type="checkbox" style="margin:26px 30px;"/> Remember me
            <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot
                Password?</a>
        </form>
    </div>
</div>

<div id="register-wrapper" class="modali">
    <div class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('register-wrapper').style.display='none'" class="close"
                  title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Registration</h1>
        </div>
        <form class="container" method="post" action="">
            <input type="text" placeholder="Enter First Name" name="fname"/>
            <input type="text" placeholder="Enter Last Name" name="lname"/>
            <input type="text" placeholder="Enter E-Mail" name="email"/>
            <input type="password" placeholder="Enter Password" name="psw1"/>
            <input type="password" placeholder="Repeat Password" name="psw2"/>
            <button name="register" class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Register</button>
        </form>
    </div>
</div>