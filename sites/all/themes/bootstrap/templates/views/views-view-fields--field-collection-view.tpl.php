<table>
<?php foreach ($fields as $id => $field): ?>
  <tr>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
   <td>
         <?php print $field->label_html; ?>
    </td>
    <td>
        <?php print $field->content; ?>
    </td>
  <?php print $field->wrapper_suffix; ?>
</tr>
<?php endforeach; ?>
</table>

