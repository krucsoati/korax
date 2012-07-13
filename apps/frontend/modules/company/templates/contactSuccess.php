<h1>Elérhetőségek</h1>
<fieldset class="contact">
    <p>
        <label>Iroda és Telephely:</label>
        2518 Leányvár, Vaskapu-puszta
    </p>
    <p>
        <label>Telefon</label>
        (33) 507-730
    </p>
    <p>
        <label>Fax</label>
        (33) 507-731
    </p>
    <p>
        <label>E-mail</label>
        mail@koraxbp.hu
    </p>
    <p>
        <label>Megközelíthetőség:</label>
        10-es úton Leányvár és Dorog között, a 35-ös km-nél
    </p>
</fieldset>
<form action="<?php print url_for('company/mail') ?>" method="post" name="mail" id="mail">
  
    <fieldset class="personal"> Üzenet küldése
        
        <p>
            <label for="theme">Téma</label>
            <?php print $form['message']['theme']->render() . $form['message']['theme']->renderError() ?>
	</p>
        <p>
            <label for="name">Név</label>
            <?php print $form['name']->render() . $form['name']->renderError(array('class' => 'error')) ?>
	</p>
        <p>
            <label for="tel">Telefon</label>
            <?php print $form['tel']->render() . $form['tel']->renderError(array('class' => 'error')) ?>
	</p>
        <p>
            <label for="email">Email</label>
            <?php print $form['email']->render() . $form['email']->renderError(array('class' => 'error')) ?>
	</p>	
        <p>
            <label for="message">Üzenet</label>
            <?php print $form['message']['mesage']->render() . $form['message']['mesage']->renderError()  ?>
	</p>
        <?php  print $form['captcha']->render(); ?>
        <?php  print $form['captcha']->renderError(); ?>
        <?php  print $form->renderHiddenFields() ?>
    
        <input type="submit" value="Üzenet küldése" />
    </fieldset>
    
</form>    


