<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?= URLROOT . '/posts'; ?>" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
    <div class="card card-body bg-light mt-5">
        <h2>Edit Post</h2>
        <p>Edit a post with this form</p>
        <form action="<?= URLROOT . '/posts/edit/' . $data['id']; ?>" method="post">
            <div class="form-group mb-2">
                <label for="title">Title: <sup>*</sup></label>
                <input id="title" type="text" name="title" class="form-control form-control-lg <?= (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>"
                       value="<?= $data['title']; ?>">
                <span class="invalid-feedback"><?= $data['title_error']; ?></span>
            </div>
            <div class="form-group mb-2">
                <label for="body">Body: <sup>*</sup></label>
                <textarea rows="10" id="body" name="body" class="form-control form-control-lg <?= (!empty($data['body_error'])) ? 'is-invalid' : ''; ?>"><?= $data['body']; ?></textarea>
                <span class="invalid-feedback"><?= $data['body_error']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>