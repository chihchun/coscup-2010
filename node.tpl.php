<section class="<?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <?php if (!$page && !$is_front): ?>
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>

  <?php print $content; ?>
</section>
