<h1>Feliratkozás hírlevélre</h1>


<?php include_partial('form', array('form' => $form)) ?>

<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="flash_notice"><?php print $sf_user->getFlash('notice') ?></div>
<?php endif ?>