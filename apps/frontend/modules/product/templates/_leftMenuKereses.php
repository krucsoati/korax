<table>
    <?php foreach ($leftMenuParams['value'] as $product): ?>
    <tr>
      <td><a href="<?php print url_for('product/show') . '/id/' . $product['id'] ?>" ><?php echo $product['name'] ?></a></td>
    </tr>
    <?php endforeach; ?>
</table>
