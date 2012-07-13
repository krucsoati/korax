<h1 class="head">Aktualitások, újdonságok</h1>

<?php foreach ($newss as $news): ?>
    <div class="news_row">
        <div class="news_date"><?php  print date('Y.m.d', strtotime($news->get('create_date'))) ?></div>
        <div class="news_title"><?php print $news->get('title_' . $sf_user->getCulture()) ?></div>
        <div class="news_news"><?php  print $news->get('news_' . $sf_user->getCulture()) ?></div>
    </div>
<?php endforeach; ?>

