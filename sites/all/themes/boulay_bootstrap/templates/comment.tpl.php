<div class="comment-wrapper">
  <article class="<?php print $classes . ' ' . $zebra; ?>">
    <header>
      <h3><?php print render($comment->name) ?></h3>

      <?php if ($new) : ?>
        <mark class="new"><?php print drupal_ucfirst($new) ?></mark>
      <?php endif; ?>

      <?php print $picture ?>

      <span class="submitted"><?php print $submitted; ?></span>
    </header>

    <div class="content">
      <?php
        hide($content['links']);
        print render($content);
        ?>
      <?php if ($signature): ?>
        <footer class="signature"><?php print $signature ?></footer>
      <?php endif; ?>
    </div>

    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>
  </article><!-- /comment -->
</div>
