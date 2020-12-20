<?php snippet('header') ?>

<main class="main">
  <h1><?= $page->title() ?></h1>
  <p><?= $page->text() ?></p>

  <?php snippet('projects', [
    'projects' => collection('projects-featured')
  ]) ?>
</main>

<?php snippet('footer') ?>