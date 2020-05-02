<?php

include __DIR__ . '/../Models/Comment.php';
/**
 * приходит запрос на добавление в базу
 */
if(isset($_POST['yourName']) && isset($_POST['yourComment'])){

    $name = substr ( trim ( htmlspecialchars($_POST['yourName']) ),0,30);
    $comment = substr ( trim ( htmlspecialchars($_POST['yourComment']) ),0,300);

    $newComment = new Comment;
    $newComment ->name = $name;
    $newComment ->comment = $comment;

    if( $newComment->AddComment()){
        header('Location:/templates/comments.php');
    }else{
        header('Location:/templates/error.php?error=errorAddComment');
    }
}






