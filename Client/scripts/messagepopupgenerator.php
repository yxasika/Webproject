<?php

function generatemessagepopup($receiver, $sender, $subject)
{
    echo '
    <div class="modal fade" id="ModalCenter' . $artid . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="' . $type . 'ModalCenterTitle">' . $type . ' article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ' . $text . '
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action=""  method="post"><button value="' . $artid . '" type="submit" name="' . $type . '" class="btn btn-' . $buttontype . '" href="...?' . $type . '="' . $artid . '>' . $type . '</button>

                </form>
            </div>
        </div>
    </div>
    </div>
    ';
}

?>