<h2 style="color: white;"><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3 style="color: white;"><?= esc($news_item['title']) ?></h3>

        <div style="color: white;" class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p style="color: white;"><a href="/lab3/ci4/public/news/<?= style="color: white;" esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3 style="color: white;">No News</h3>

    <p style="color: white;">Unable to find any news for you.</p>

<?php endif ?>