<table class="table table-bordered table-striped">
<?php include_customizes($id, 'firstRow') ?>
<tbody>
<?php foreach ($options['list'] as $key => $value): ?>
<tr>
<th><?php echo $key ?></th>
<td><?php echo $options['list']->getRaw($key) ?></td>
</tr>
<?php endforeach; ?>
</body>
<?php include_customizes($id, 'lastRow') ?>
</table>
