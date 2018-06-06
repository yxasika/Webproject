<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online-Journal</title>
    <meta charset="utf-8" lang="de">
    <meta name="viewport" content="width = device-width, height = device-height, initial-scale=1.0,
  user-scalable=yes">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/loginPopup.css">
    <script rel="script" type="text/javascript" src="../scripts/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="../scripts/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="../scripts/search.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>
<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php"><img src="../src/imgs/logo.png" alt="logo" align="center"
                                                 onclick="$(this).rotate(45)"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="archive.php">ARCHIVE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editor.php">EDITOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="author.php">AUTHOR</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <form class="form-inline my-2 my-lg-0" id="searchForm">
                <input class="searchInput form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                       id="searchInput">
            </form>
            <a class="btn btn-primary icon my-2 mr-2" role="button" href="notification.php">
                <i class="material-icons">notifications</i><span class="badge">4</span></a>
            <button class="btn btn-primary my-2 mr-2"
                    onclick="document.getElementById('login-wrapper').style.display='block'">LOG IN
            </button>
            <button class="btn btn-primary my-2 sm-0"
                    onclick="document.getElementById('register-wrapper').style.display='block'">SIGN UP
            </button>
        </ul>
    </div>
</nav>
<--Login Form-->
<div id="login-wrapper" class="modali">
    <form class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Log In</h1>
        </div>
        <div class="container">
            <input type="text" placeholder="Enter E-Mail" name="uname">
            <input type="password" placeholder="Enter Password" name="psw">
            <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Log In</button>
            <input type="checkbox" style="margin:26px 30px;"> Remember me
            <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
        </div>
    </form>
</div>

<--Register Form-->
<div id="register-wrapper" class="modali">
    <form class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('register-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Registration</h1>
        </div>
        <div class="container">
            <input type="text" placeholder="Enter First Name" name="fname">
            <input type="text" placeholder="Enter Last Name" name="lname">
            <input type="text" placeholder="Enter E-Mail" name="email">
            <input type="password" placeholder="Enter Password" name="psw">
            <input type="password" placeholder="Repeat Password" name="psw2">
            <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Register</button>
        </div>
    </form>

</div>
<!--Approve Popup-->
<div class="modal fade" id="approveModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveModalCenterTitle">Approve article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to approve this article?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Approve</button>
            </div>
        </div>
    </div>
</div>

<!--Reject Popup-->
<div class="modal fade" id="rejectModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectModalCenterTitle">Reject article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to reject this article?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Reject</button>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card container">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">Articles</h1>
                        <p class="lead text-muted">This is the perspective of an editor. You can view all of articles
                            , approve or reject them here.</p>
                    </div>
                </section>

                <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="true">Pending articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-myArticle-tab" data-toggle="pill"href="#pills-myArticle" role="tab" aria-controls="pills-myArticle" aria-selected="false">My articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-approved" aria-selected="false">Approved articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-rejected-tab" data-toggle="pill"href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected articles</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/monster_hunter_world.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 1</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/dark_souls.jpg" alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 2</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/rainbow_six.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 3</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-myArticle" role="tabpanel" aria-labelledby="pills-myArticle-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/rainbow_six.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 1</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/league_of_legends.jpg" alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 2</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/path_of_exile.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 3</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/monster_hunter_world.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 1</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/dark_souls.jpg" alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 2</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/path_of_exile.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 3</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/monster_hunter_world.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 1</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/dark_souls.jpg" alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 2</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="../src/imgs/path_of_exile.jpg"
                                             alt="monster_hunter_world">
                                        <div class="card-body">
                                            <h5 class="card-title">ARTICLE 3</h5>
                                            <i>Author</i>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                                diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <a href="publishedarticles.html" class="btn btn-primary">Read More</a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-outline-secondary"
                                                        data-toggle="modal"
                                                        data-target="#approveModalCenter">Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal"
                                                        data-target="#rejectModalCenter">Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="col">
        <div class="row">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" href="impressum.php">IMPRESSUM</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <p class="text-secondary  mx-auto">&copy; 2018 DPAD</p>
        </div>
    </div>
</footer>
</body>

</html>
