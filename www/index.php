<?php

require __DIR__ . '/models/news.php';

$news = new News();
$items = News::getAll();

include __DIR__ . '/view/index.php';

