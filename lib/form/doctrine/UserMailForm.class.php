<?php

/**
 * Description of userMailForm
 *
 * @author Ati
 */
class UserMailForm extends UserForm {
    
    public function configure() {
        $this->useFields(array('email', 'name'));
        $this->widgetSchema->setLabels(array(
            'name'       => 'Név',
            'email'       => 'Email'
        ));

    }
}


?>
