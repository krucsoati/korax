<?php

/**
 * Message form.
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MessageForm extends BaseMessageForm {
    
    public function configure() {

        # $this->useFields(array('theme', 'mesage'));
	# unset($this['user_id']);
	
	# $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
	
	
	
	
	
	
        $this->widgetSchema['theme'] = new sfWidgetFormChoice(array(
            'choices'  => (array( 0 => 'Kérem válasszon!', 1 => 'Villamosipari', 2 => 'Építőipari', 3 => 'Általános')),
            'expanded' => false,
        ));
        
        # $this->widgetSchema['mesage'] = new sfWidgetFormTextareaTinyMCE(array(), array('rows' => 10, 'cols' => 100));
        $this->widgetSchema['mesage'] = new sfWidgetFormTextarea(array(), array('rows' => 10, 'cols' => 100, 'required' => 'Kitöltése kötelező!'));
        
        $this->validatorSchema['theme'] = new sfValidatorChoice(array('choices' => array( 1, 2, 3), 'required' => true), array('required' => 'Kötelező választani!', 'invalid' => 'Kötelező választani!'));
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    }
}
