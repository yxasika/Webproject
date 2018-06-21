<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="../imgs/logo.png" alt="logo" align="center"
                                                  onclick="$(this).rotate(45)"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
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