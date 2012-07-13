<table>
    <?php foreach ($leftMenuParams['value'] as $category): ?>
    <tr>
        <td><a href="<?php print url_for('product/show') . '/id/' . $category->getId() ?>" ><?php echo $category->get('name_' . $sf_user->getCulture()) ?></a></td>
    </tr>
    <?php endforeach; ?>
</table>
