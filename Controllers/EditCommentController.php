<?php

require __DIR__ . '/../Models/Comment.php';

/**
 * приходит запрос просто на показ в форме изменения для последующего изменения
 */
if(isset($_GET['idEdit']) ) {
    $idEdit = intval($_GET['idEdit']);
    $commentForShow = Comment::GetComment($idEdit);
//    var_dump($commentForShow);

    ob_start();
    include __DIR__ . '/../templates/editComment.php';
    $content = ob_get_contents();
    ob_end_clean();
    $content = str_replace(['%name%','%comment%','%id%'],[$commentForShow['name'],$commentForShow ['comment'],$commentForShow['id']],$content);
    echo $content;
}
/**
 * приходит запрос из формы для апдейта данных
 */
if(isset($_POST['id']) && isset($_POST['yourName']) && isset($_POST['yourComment'])){
    $id = intval($_POST['id']);
//    echo 'надо править   '.$id;
    $yourName = substr ( trim ( htmlspecialchars($_POST['yourName']) ),0,30);
    $yourComment = substr ( trim ( htmlspecialchars($_POST['yourComment']) ),0,300);

    $comment = new Comment;
    $comment ->id = $id;
    $comment ->name = $yourName;
    $comment ->comment = $yourComment;

    if($comment->EditComment()){
        header('Location:/templates/comments.php');
    }else{
        header('Location:/templates/error.php?error=errorUpdateComment');
    }


}