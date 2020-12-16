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

    <nav class="menu">
      <ul>
        <?php foreach ($site->children()->listed() as $item): ?>
          <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  </header>

  <main class="main">
    <h1><?= $page->title() ?></h1>
    <?= $page->text() ?>
  </main>

  <footer class="footer">
    <a href="https://twitter.com/<?= $site->twitter() ?>">Follow us on Twitter</a>
  </footer>

</body>
</html>