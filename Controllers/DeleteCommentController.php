<?php

include __DIR__ . '/../Models/Comment.php';

/**
 * приходит запрос на удаление комментария
 */
if(isset($_GET['idDelete'])){
    $id = intval($_GET['idDelete']);

    if(false == Comment::DeleteComment($id)){
        header('Location:/templates/comments.php');
    }else{
        header('Location:/templates/error.php?error=errorDeleteComment');
    }

}

