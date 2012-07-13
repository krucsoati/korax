<h1><?php print $category->get('name_' . $sf_user->getCulture()) ?></h1>


<?php include_partial('productList', array('products' => $products)) ?>


