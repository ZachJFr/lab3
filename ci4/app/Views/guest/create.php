<h2 style="color: white;"><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/~zafrancia/lab3/ci4/public/guest/create" method="post">
    <?= csrf_field() ?>

    <label for="name" style="color: white;">Name</label>
    <input style="color: white;"type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email" style="color: white;">Email</label>
    <input style="color: white;" type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website" style="color: white;">Website</label>
    <input style="color: white;" type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment" style="color: white;">Comment</label>
    <textarea style="color: white;" name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    
    <label for="gender" style="color: white;">Gender</label>
    <input style="color: white;" type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry" >
</form>