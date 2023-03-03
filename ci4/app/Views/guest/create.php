<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/lab3/ci4/public/guest/create" method="post">
    <?= csrf_field() ?>

    <label for="name">Title</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Title</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Title</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="gender">Title</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <label for="comment">Text</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>