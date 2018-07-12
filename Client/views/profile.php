<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <?php include "head.php" ?>
</head>

<body>

<?php include "navbar.php" ?>

<!--Save Popup-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="content" name="profile" action="profile.php">
                <h2>Profile Data</h2>
                <div class="form-row">
                    <div class="form-col mr-4">Current Email <input type="text" class="form-control"
                                                                    placeholder="unchanged" title="current Email"><br>
                        current password<input type="password" class="form-control" placeholder="unchanged"><br>
                        new password
                        <input type="password" class="form-control" placeholder=""><br>
                        repeat new password
                        <input type="password" class="form-control" placeholder=""><br>
                    </div>
                    <div class="form-col mr-4">
                        first name
                        <input type="text" class="form-control" placeholder="unchanged"><br>
                        last name
                        <input type="text" class="form-control" placeholder="unchanged"><br>
                        birth date
                        <input type="date" class="form-control"><br>
                        profile picture<br>
                        <input type="file" class="btn btn-primary float-right" accept=".png,.jpg,.jpeg">
                    </div>
                    <div class="form-col">
                        about me
                        <textarea id="aboutme" name="aboutme" placeholder="write something about yourself here..."
                                  maxlength="1000" cols="50" class="form-control"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary float-right">
            </form>
        </div>

    </div>

</main>


<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="content" name="profile" action="profile.php">
                <div class="imgcontainer">
                    <i id="pic" alt="Avatar" class="avatar material-icons">account_circle</i>
                </div>
                <div class="container">
                    <input type="text" placeholder="Enter First Name" name="fname">
                    <input type="text" placeholder="Enter Last Name" name="lname">
                    <input type="date" placeholder="DD/MM/YYYY" name="date">
                    <input type="text" placeholder="Enter E-Mail" name="email">
                    <input type="password" placeholder="Enter Password" name="psw">
                    <input type="password" placeholder="Repeat Password" name="psw2">
                    <button type="button" class="popupBtn btn btn-primary my-2 my-sm-0" data-toggle="modal"
                            data-target="#exampleModalCenter">Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
