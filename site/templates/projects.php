<?php snippet('header') ?>

  <main class="main">
    <h1><?= $page->title() ?></h1>

    <nav class="menu">
      <ul>
        <?php foreach ($page->children()->listed() as $project): ?>
          <li><a href="<?= $project->url() ?>"><?= $project->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  </main>

<?php snippet('footer') ?>