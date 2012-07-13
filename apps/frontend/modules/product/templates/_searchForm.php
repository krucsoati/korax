<div class="search">
    <form action="<?php print url_for('product/index') ?>" method="post">
        <?php $form = new ProductSeachForm(); print $form; ?>
        <input type="submit" value="Keresés" />
    </form>
</div>