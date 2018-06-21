<?php

function generateArticleCard($type, $data)
{
    echo '
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src=' . $data["img"] . 'alt="article image">
            <div class="card-body">
                <h5 class="card-title">' . $data["title"] . '</h5>
                <i>' . $data["author"] . '</i><p>';

    $categories = getCategories($data['id']);
    foreach ($categories as $category) {
        echo '<button type="button" class="btn btn-success btn-outline-secondary">' . $category . '</button>';
    }

    echo '</p>
                <p class="card-text">' . $data["description"] . '</p>
                <a href="#" class="btn btn-primary">Read More</a>';

    if ($type == 'editor_pending') {
        echo '
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-outline-secondary" data-toggle="modal" data-target="#approveModalCenter' . $data["id"] . '">Approve</button>
                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal" data-target="#rejectModalCenter' . $data["id"] . '">Reject</button>
            </div>';
    }
    if ($type == 'editor_approved') {
        echo '
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-outline-secondary" data-toggle="modal" data-target="#publishModalCenter' . $data["id"] . '">Publish
                </button>
            </div>
        ';
    }


    echo '
        </div></div>
        </div>';

}


?>