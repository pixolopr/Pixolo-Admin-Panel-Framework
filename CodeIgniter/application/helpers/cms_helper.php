<?php

function btn_edit($uri){
    return anchor($uri, '<i class="glyphicon glyphicon-pencil cblack"></i>');
}
function btn_delete($uri){
    return anchor($uri, '<i class="glyphicon glyphicon-remove">Delete</i>', array('onclick' => 'return alert("Are you sure you want to delete");'));
}