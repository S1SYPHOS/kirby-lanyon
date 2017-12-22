<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <link href="http://gmpg.org/xfn/11" rel="profile">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <!-- Enable responsiveness on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <title>
    <?php e($page->isHomePage(),
      $site->title() . ' · ' . $site->tagline(),
      $page->title() . ' · ' . $site->title()
    ) ?>
  </title>
    
  <!-- CSS -->
  <?= css(array(
    'assets/css/poole.css',
    'assets/css/syntax.css',
    'assets/css/lanyon.css'
  )) ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700|PT+Sans:400">

  <!-- Icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $site->url() ?>/assets/apple-touch-icon-precomposed.png">
  <link rel="shortcut icon" href="<?= $site->url() ?>/assets/favicon.ico">

  <!-- Planned: RSS -->
  <!--  <link rel="alternate" type="application/rss+xml" title="RSS" href="/atom.xml">-->
</head>
<body>
  
  <?php snippet('sidebar') ?>
  

  <!--
      Wrap is the content to shift when toggling the sidebar. We wrap the content to avoid any CSS collisions with our real content.
  -->

  <div class="wrap">
    <div class="masthead">
      <div class="container">
        <h3 class="masthead-title">
          <a href="<?= $site->url() ?>" title="Home"><?= $site->title()->html() ?></a>
          <small><?= $site->tagline()->html() ?></small>
        </h3>
      </div>
    </div>

    <div class="container content">