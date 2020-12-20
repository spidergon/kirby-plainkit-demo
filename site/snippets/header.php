<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if ($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $page->seoTitle()->or($page->title()) ?> | <?= $site->title() ?></title>
  <?php endif ?>

  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>
</head>
<body>
  <header class="header">
    <a class="logo" href="<?= $site->url() ?>">
      <?= asset('assets/icons/logo.svg')->read() ?>
    </a>
    <?php snippet('menu') ?>
  </header>