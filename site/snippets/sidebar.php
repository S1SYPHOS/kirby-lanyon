<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->

<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-item">
    <?= $site->description()->kt() ?>
  </div>

  <nav class="sidebar-nav">

    <!--
      The code below dynamically generates a sidebar nav of all
      visible pages, see https://getkirby.com/docs/cookbook/menus
    -->

    <?php if($pages->visible()->count()) : ?>
      <?php foreach($pages->visible() as $item) : ?>
      <a class="sidebar-nav-item<?php e($item->isOpen(), ' active') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
      <?php endforeach ?>
    <?php endif ?>
      
    <a class="sidebar-nav-item" href="<?= $site->github() ?>/archive/v<?= $site->version() ?>.zip">Download</a>
    <a class="sidebar-nav-item" href="<?= $site->github() ?>">GitHub project</a>
    <span class="sidebar-nav-item">Currently v<?= $site->version() ?></span>
  </nav>

  <div class="sidebar-item">
    <p>&copy; <?= date('Y') ?>. All rights reserved.</p>
  </div>
</div>