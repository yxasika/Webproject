<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article Upload</title>
    <?php include "head.php" ?>
</head>

<body>
<?php include "navbar.php";
include "../scripts/uploadarticlescript.php" ?>

<main style="position: relative; top: 1em;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <form class="container" id="uploadform" method="post" enctype="multipart/form-data">
                    <h2>Upload an Article</h2>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input name="title" type="text" class="form-control" required
                                       placeholder="Title of the article">
                            </div>
                        </div>
                    </div>
                    <div>

                    <textarea name="descriptionarea"
                              placeholder="write a short summary of your article here..." rows="20" cols="20"
                              class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        upload your PDF file here:
                        <input id="pdffile" name="pdffile" type="file" class="float-right" required accept=".pdf">
                    </div>
                    <div class="form-group">
                        upload your article's header image here:
                        <input id="imgfile" name="imgfile" type="file" class="float-right" accept=".png,.jpg,.jpeg">
                        <label content="imglinkid"></label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                show categories
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <label class="mr-2" for="chk_rpg">rpg</label>
                                            <input name="rpg" type="checkbox" class="mt-1" id="chk_rpg">
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <label class="mr-2" for="chk_jnr">jump'n run</label>
                                            <input name="jump" type="checkbox" class="mt-1" id="chk_jnr">
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <label class="mr-2" for="chk_sht">shooter</label>
                                            <input name="shooter" type="checkbox" class="mt-1" id="chk_sht">
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-row">
                                            <label class="mr-2" for="chk_act">action</label>
                                            <input name="action" type="checkbox" class="mt-1" id="chk_act">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <input name="upload" type="submit" class="btn btn-primary float-right"/>
                        </div>
                    </div>
                </form>
                <?php

                if ($success)
                {
                    echo '<ul class="text-success" style= "list-style-type: none;"><li>Article upload successful! Redirecting to author page in a moment. (Only if Javascript is enabled)</li></ul>';
                }

                if (count($error) > 0) {
                    echo "<ul class='text-danger' style='list-style-type: none;'>";
                    foreach ($error as $e) {
                        echo "<li>" . $e . "</li>";
                    }
                    echo "</ul>";
                }

                ?>
            </div>
        </div>
    </div>

</main>
<?php include "footer.php" ?>

</body>

</html>
