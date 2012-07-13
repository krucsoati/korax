<?php  foreach($products as $product) : ?>

    <p class="product">
        <div class="prod_name"><?php print $product->get('name_' . $sf_user->getCulture()) ?></div>
        <div class="prod_guide"><?php print $product->get('guide_' . $sf_user->getCulture()) ?></div>
        <div class="prod_description"><?php print $product->get('description_' . $sf_user->getCulture()) ?></div>
    </p>

<?php endforeach; ?>