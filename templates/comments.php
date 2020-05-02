<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php require __DIR__ . '/head.php'; ?>
<body>
<?php require __DIR__. '/navigationPanel.php'; ?>
<div class="container">

    <header>
        <h1>все комментарии</h1>
    </header>
    <?php
    require __DIR__ . '/../Models/Comment.php';

    $allComments = Comment::GetAllComments();
    ?>
    <table class="table table-dark" id="tableAllComments" >
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">comment</th>
            <th scope="col">deleted</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allComments as $kay => $comment) { ?>
            <tr>
                <th scope="row"><?php echo $comment['id'] ;?></th>
                <td><?php echo $comment['name']   ; ?></td>
                <td><?php echo $comment['comment']; ?></td>
                <td><?php echo $comment['deleted']; ?></td>
                <td><a href="/Controllers/EditCommentController.php?idEdit=<?php echo $comment['id'] ;?>">edit</a> </td>
                <td><a href="/Controllers/DeleteCommentController.php?idDelete=<?php echo $comment['id'] ;?>">delete</a> </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>

<?php require __DIR__. '/footer.php' ;?>
</body>
</body>
</html>
