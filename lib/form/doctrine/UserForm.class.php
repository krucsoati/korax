<?php

/**
 * User form.
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm {
    
    public function configure() {
	
	$message = new Message();
	$message->User = $this->getObject();
	$messageForm = new MessageForm($message);
	
        $this->embedForm('message', $messageForm);
        $this->embedRelation('Message');
	
	$this->widgetSchema['captcha'] = new sfWidgetCaptchaGD();                                    
        $this->validatorSchema['captcha'] = new sfCaptchaGDValidator(array('length' => 6), array('invalid' => 'Rossz karakterek próbálja meg még egyszer!',
												 'required' => 'Kitöltése kötelező!'));      
	
	
	$this->validatorSchema['email'] = new sfValidatorEmail(array(), array('invalid'  => 'Nem megfelelő email cím!',
                          'required' => 'Kitöltése kötelező'));
	
	/*
        $this->validatorSchema['email'] = new sfValidatorAnd(
            array(
                new sfValidatorDoctrineUnique(
                    array('model'    => 'User',
                          'column'   => 'email',
                          'required' => true),
                    array('invalid'  => 'Foglalt email cím!',
                          'required' => 'Kitöltése kötelező')
                ),
                new sfValidatorEmail(),
            ),
            array('halt_on_error' => true),
            array('invalid' => 'Valótlan email-cím, vagy már szerepel az adatbázisban. Kérem adjon meg másik email-címet!',
                  'required' => 'Az Email mező kitöltése kötelező!')
        );*/
	
    }
}
