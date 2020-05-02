<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php require __DIR__ . '/head.php'; ?>
<body>
<?php require __DIR__ . '/navigationPanel.php'; ?>

    <div class="container">
        <header>
                <h1>добавить новый комментарий</h1>
        </header>

        <form action="/Controllers/AddCommentController.php" method="post">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text"  class="form-control" name="yourName"
                       aria-describedby="nameHelp" placeholder="name" required  minlength="3" maxlength="30"
                >
                <small id="nameHelp" class="form-text text-muted">maximum name length 30 characters.</small>
                <label for="comment">your comment</label>
                <textarea class="form-control" name="yourComment" aria-describedby="commentHelp"
                          placeholder="comment" rows="3" required minlength="3" maxlength="300">
                </textarea>
                <small id="commentHelp" class="form-text text-muted"> max length your comment 300 characters </small>
            </div>
            <button type="submit" class="btn btn-primary" > submit </button>
        </form>
    </div>
<?php require __DIR__. '/footer.php' ?>
</body>
</html>
