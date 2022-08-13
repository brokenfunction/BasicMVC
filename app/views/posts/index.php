<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('post_message'); ?>
    <div class="row mb-3">
        <div class="col-6">
            <h1>Posts</h1>
        </div>
        <div class="col-6">
            <a href="<?= URLROOT . '/posts/add'; ?>" class="btn btn-primary float-right">
                <i class="fa fa-pencil"></i> Add Posts
            </a>
        </div>
    </div>
    <?php foreach ($data['posts'] as $post) : ?>
        <div class="card card-body mb-3">
            <h4 class="card-title"><?= $post->title; ?></h4>
            <div class="bg-light p-2 mb-3">
                written by <?= $post->name; ?> on <?= $post->postCreated; ?>
            </div>
            <p class="card-text">
                <?= substr($post->body, 0, 155) . '...'; ?>
            </p>
            <a href="<?= URLROOT . '/posts/show/' . $post->postId; ?>" class="btn btn-dark">Read More</a>
        </div>
    <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>