<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <?php if ($site_name): ?>
            <h3 class="masthead-brand"><?php print $site_name; ?></h3>
          <?php endif; ?>
          <?php if ($main_menu): ?>
            <ul class="nav masthead-nav">
              <?php print render($main_menu); ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

      <div class="inner cover">
        <?php if ($title): ?>
          <h1 class="cover-heading"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p><?php print $copyright; ?></p>
        </div>
      </div>

    </div>
  </div>
</div>
