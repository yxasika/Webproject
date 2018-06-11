<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Seite ist angelehnt an Bootstrap Album example
 https://getbootstrap.com/docs/4.0/examples/album/-->

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

<?php include "navbar.php"?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="album py-5 bg-light">
                <div class="card container">
                    <section class="jumbotron text-center">
                        <div class="container">
                            <h1 class="jumbotron-heading">My articles</h1>
                            <p class="lead text-muted">This is the perspective of an author. You can view all of your articles
                                and edit them here. You can upload new articles too.</p>
                            <p>
                                <a href="#" class="btn btn-primary my-2" onclick="window.location.href='uploadarticle.php'">Upload
                                    a new
                                    article</a>
                            </p>
                        </div>
                    </section>

                    <div class="container">
                        <div class="row">

                            <?php

                            $source = file_get_contents("../json/articles.json");
                            $articles = json_decode($source, true);

                            foreach ($articles as $article => $article)
                            {
                                if($articles[$article]["mail"] == $_SESSION["email"]) {


                                    echo '
                                        <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src=' . $articles[$article]["imglink"] . '
                                        alt="article image">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $articles[$article]["title"] . '</h5>
                                            <i>' . $articles[$article]["author"] . '</i>
                                            <p class="card-text">' . $articles[$article]["description"] . '</p>
                                            <a href=' . $articles[$article]["articlelink"] . ' class="btn btn-primary">Read More</a>
                                        
                                        </div>
                                    </div>
                                </div>
                                    ';
                                }
                            }
                            ?>

                        </div>

<!--
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="../src/imgs/monster_hunter_world.jpg" alt="Thumbnail">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    onclick="window.location.href='article_1.html'">View
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="../src/imgs/dark_souls.jpg"
                                     data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                     alt="Thumbnail">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="../src/imgs/path_of_exile.jpg"
                                     data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                     alt="Thumbnail">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="../src/imgs/default.jpg"
                                     data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                     alt="Thumbnail">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="../src/imgs/default.jpg"
                                     data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                     alt="Thumbnail">
                                <div class="card-body">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php"?>
</body>

</html>
