<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css('assets/css/styles.css') ?>
</head>
<body>
<header>

  <?php
  $items = $pages->listed();
  if($items->isNotEmpty()):
  ?>
  <nav>
    <ul>
      <?php foreach($items as $item): ?>
        <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
  <?php endif ?>
</header>