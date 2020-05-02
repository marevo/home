<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <?php require __DIR__. '/head.php' ;?>
</head>
<body>
<?php require __DIR__. 'navigationPanel.php' ;?>
    <header>
        <h1>править комментарий</h1>
    </header>
    <form action="/Controllers/EditCommentController.php?" method="post">
        <div class="form-group">
            <input name="id" value="%id%" readonly type="hidden">
            <label for="name">name</label>
            <input type="text"  class="form-control" name="yourName"
                   aria-describedby="nameHelp" placeholder="name" required  minlength="3" maxlength="30"
                   value="%name%"
            >
            <small id="nameHelp" class="form-text text-muted">maximum name length 30 characters.</small>
            <label for="comment">your comment</label>
            <textarea class="form-control" name="yourComment" aria-describedby="commentHelp"
                      placeholder="comment" rows="3" required minlength="3" maxlength="300">%comment%
                </textarea>
            <small id="commentHelp" class="form-text text-muted"> max length your comment 300 characters </small>
        </div>
        <button type="submit" class="btn btn-primary" > edit </button>
    </form>
</div>

<?php require __DIR__. '/footer.php' ;?>
</body>
</html>
