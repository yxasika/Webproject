<div class="modal fade" id="login-wrapper" tabindex="-1" role="dialog" aria-labelledby="login-wrapperLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="container" method="post" action=""/>
                 <input class="form-control mb-1" type="text" placeholder="Enter your Email" name="email"/>
                    <input class="form-control mb-2" type="password" placeholder="Enter Password" name="password"/>

            </br>
                    <input type="checkbox" style="margin:26px 30px;"/> Remember me
                    <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot
                        Password?</a>
                <div class="modal-footer">

                <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit" name="login">Log In</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="register-wrapper" tabindex="-1" role="dialog" aria-labelledby="register-wrapperLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="container" method="post" action="">
                    <input class="form-control mb-1" type="text" placeholder="Enter First Name" name="fname"/>
                    <input class="form-control mb-1" type="text" placeholder="Enter Last Name" name="lname"/>
                    <input class="form-control mb-1" type="text" placeholder="Enter E-Mail" name="email"/>
                    <input class="form-control mb-1" type="password" placeholder="Enter Password" name="psw1"/>
                    <input class="form-control mb-3" type="password" placeholder="Repeat Password" name="psw2"/>


                <div class="modal-footer">

                    <button name="register" class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Register</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>