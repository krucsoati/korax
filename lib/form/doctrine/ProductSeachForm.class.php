<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductSeachForm
 *
 * @author Ati
 */
class ProductSeachForm extends sfForm {
    
    public function configure() {
        $this->setWidgets(array(
            'name' => new sfWidgetFormInputText()
        ));
       
        $this->setValidators(array(
            'name' => new sfValidatorString(array('max_length' => 100)),
        ));
        
        $this->widgetSchema->setLabels( array( 'name' => 'Kulcsszó' ) );     
  }
}

?>
