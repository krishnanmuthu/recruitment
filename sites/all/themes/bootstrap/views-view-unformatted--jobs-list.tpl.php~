<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>

	<div class="content-wrapper">
					<?php endif; ?>
					<div class="jobcode"><?php print $view->render_field('title_field', $id);?></div>
					<div class="tech"><?php print $view->render_field('field_hook_one', $id);?></div>
					<div class="experience"><?php print $view->render_field('field_hook_two', $id);?></div>
					<div class="vac"><?php print $view->render_field('title_field', $id);?></div>
					<div class="jobdesc"><?php print $view->render_field('field_hook_one', $id);?></div>
					<div class="experience"><?php print $view->render_field('field_hook_two', $id);?></div>

				</div>


  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

