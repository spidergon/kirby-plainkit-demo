<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>
  <?= css('assets/css/index.css') ?>
</head>
<body>
  <header class="header">
    <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
    <?php snippet('menu') ?>
  </header>