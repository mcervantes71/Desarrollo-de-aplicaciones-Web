<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="card card-body bg-light mt-5">
        <h2>Edit Post</h2>
        <p>Edit a post with this form</p>
        <form action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post_id']; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title: <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
                <span class="invalid-feedback"><?php echo $data['title_error']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body: <sup>*</sup></label>
                <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_error'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
                <span class="invalid-feedback"><?php echo $data['body_error']; ?></span>
            </div>
            <a class="btn btn-danger" href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $data['post_id']; ?>">Cancel</a>
            <input class="btn btn-success" type="submit" value="Submit" />
        </form>
    </div>
    <?php require APP_ROOT . '/views/inc/footer.php'; ?>
