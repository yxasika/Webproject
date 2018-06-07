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
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
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
    <link rel="stylesheet" type="text/css" href="assets/css/loginPopup.css">
    <script rel="script" type="text/javascript" src="assets/js/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="assets/js/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="assets/js/search.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>

<body>
<?php include "logReg.php" ?>
<?php include "navbar.php" ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="content" name="contact" action="index.php">
                <h2>Upload an Article</h2>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" required placeholder="Title of the article">
                        </div>
                    </div>
                </div>
                <div>

                    <textarea id="description" name="description"
                              placeholder="write a short summary of your article here..." cols="20" rows="10"
                              class="form-control"></textarea>
                </div>
                <div class="form-group">
                    upload your PDF file here:
                    <input type="file" class="float-right" required accept=".pdf">
                </div>
                <div class="form-group">
                    upload your article's header image here:
                    <input type="file" class="float-right" accept=".png,.jpg,.jpeg">
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            show categories
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-row">
                                        <label class="mr-2" for="chk_rpg">rpg</label>
                                        <input type="checkbox" class="mt-1" id="chk_rpg">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-row">
                                        <label class="mr-2" for="chk_jnr">jump'n run</label>
                                        <input type="checkbox" class="mt-1" id="chk_jnr">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-row">
                                        <label class="mr-2" for="chk_sht">shooter</label>
                                        <input type="checkbox" class="mt-1" id="chk_sht">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-row">
                                        <label class="mr-2" for="chk_act">action</label>
                                        <input type="checkbox" class="mt-1" id="chk_act">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                <div class="col">
                    <input type="submit" value="UPLOAD" class="btn btn-primary float-right"/>
                </div>
                </div>
            </form>
        </div>
    </div>

</main>
<?php include "footer.php" ?>

</body>

</html>
