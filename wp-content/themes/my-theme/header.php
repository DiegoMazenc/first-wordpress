<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body>
  <header class="header">



  </header>

  <div class=" navigation">
    <div class="logo">

      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>

      <h1><?php bloginfo('name') ?></h1>
    </div>
    <div class="nav-desktop">

      <?php wp_nav_menu(
        [
          'container' => false,
          'theme_location' => 'primary'
        ]
      ) ?>
      <?php wp_body_open() ?>
    </div>
    <div class="nav-mobile">
      <div id="navBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
          <path fill="white" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
        </svg>
      </div>
      <div class="navToggleOff" id="navToggle">
        <?php wp_nav_menu(
          [
            'container' => false,
            'theme_location' => 'primary'
          ]
        ) ?>
      </div>
      <?php wp_body_open() ?>
    </div>
  </div>