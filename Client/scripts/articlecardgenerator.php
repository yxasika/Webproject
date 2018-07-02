<?php

function generateArticleCard($type, $data)
{
    //begin echoing the card top
    echo '
        <div class="col-md-4">
            <div class="card text-center bg-light mb-3">
                <div class="card-header">
                    <img class="card-img-top img-fluid" src="' . $data["img"] . '" alt="article image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">' . $data["title"] . '</h5>
                    <i>' . $data["author"] . '</i></br>
    ';
//echos the published date if the card is in the archive (or on the home screen)
    if($type == 'archive')
    {
        echo $data["published_date"] . '</br>';
    }
//echos the status of the article if the card is in the author section
    if($type == 'author')
    {
        echo '<button class="btn btn-warning" disabled class="button">' . $data["status"] . '</button><p></p>';
    }
//echos the categories (later clickable for a tag search)
    $categories = getCategories($data['id']);
    foreach ($categories as $category) {
        echo '<a href="#" class="badge badge-info mr-2">' . $category . '</a>';
    }

//starts the card footer and echos the article link-button (no link currently)
    echo '
        <p></p>
        <form action="../views/article.php" method="get">
        <div class="card-footer row">
            <input type="submit" class="btn btn-primary mr-4" value="Read more"/>
            <input type="hidden" name="artid" value="'.$data["id"].'">
            </form>
    ';
//echos the upvote score if the card is in the archive (or on the home screen)
    if($type == 'archive')
    {
        echo'
            <button class="btn btn-warning" disabled class="button">upvotes: ' . $data["upvote"] . '</button>
        ';
    }
//echos the editor buttons if the card is in the editor section
    if ($type == 'editor_pending') {
        echo '
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-outline-secondary" data-toggle="modal" data-target="#approveModalCenter' . $data["id"] . '">Approve</button>
                <button type="button" class="btn btn-danger btn-outline-secondary" data-toggle="modal" data-target="#rejectModalCenter' . $data["id"] . '">Reject</button>
            </div>
        ';
    }
    if ($type == 'editor_approved') {
        echo '
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-outline-secondary" data-toggle="modal" data-target="#publishModalCenter' . $data["id"] . '">Publish
                </button>
            </div>
        ';
    }
//close all open div containers
    echo '</div></div></div></div>';
}
?>