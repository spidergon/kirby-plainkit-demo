<?php snippet('header') ?>

<main class="main">
  <h1><?= $page->title() ?></h1>

  <ul class="projects">
    <?php foreach ($page->children()->listed() as $project): ?>
      <li>
        <a href="<?= $project->url() ?>">
          <figure>
            <?= $project->image()->crop(400, 500) ?>
            <figcaption><?= $project->title() ?></figcaption>
          </figure>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</main>

<?php snippet('footer') ?>
