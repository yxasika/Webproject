<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article Upload</title>
    <?php include "head.php" ?>
</head>

<body>
<?php include "navbar.php";
include "../scripts/uploadarticlescript.php"
?>

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
                        Upload your PDF file here:
                        <input id="pdffile" name="pdffile" type="file" class="float-right" required accept=".pdf">
                    </div>
                    <div class="form-group">
                        Upload your article's header image here:
                        <input id="imgfile" name="imgfile" type="file" class="float-right" accept=".png,.jpg,.jpeg">
                        <label content="imglinkid"></label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryselection">Select your article's categories:</label>
                                <select required name="categories[]" multiple class="form-control" id="categoryselection">
                                    <?php
                                    $categories = getAllCategories();
                                    foreach ($categories as $category) {
                                        echo'<option>'.$category.'</option>';
                                    }
                                    ?>
                                </select>
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
