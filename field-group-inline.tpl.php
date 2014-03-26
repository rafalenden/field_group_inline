<?php
/**
 * @file
 * Template file for theming of inline field group.
 *
 * Available variables:
 * - $group
 * - $label
 * - $fields
 * - $class
 * - $separator
 * - $num_fields
 */
?>

<?php if ($fields): ?>
  <div class="<?php print $classes; ?>">
  <?php if ($label): ?>
    <div class="field-group-label"><?php print $label; ?></div>
  <?php endif; ?>

  <?php foreach($fields as $key => $field): ?>
    <div class="field-group-inline-item item-<?php print $key; ?>">
      <?php print render($field); ?>

      <?php if ($key != $num_fields): ?>
        <span class="field-group-inline-separator"><?php print $separator; ?></span>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
  </div>
<?php endif; ?>
