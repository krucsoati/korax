<?php

/**
 * company actions.
 *
 * @package    test
 * @subpackage company
 * @author     Krucsó Attila
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class companyActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    protected function init(){
        $this->getUser()->setAttribute('leftMenuParams', null);
    }
    
    public function executeIndex(sfWebRequest $request) {
        $this->init();
        $this->forward('default', 'module');
    }
  
    public function executeCegunkrol(sfWebRequest $request) {
	$this->getUser()->setAttribute('menuPic', 'carMenu');
        $this->init();
    }

    public function executeContact(sfWebRequest $request) { 
	$this->getUser()->setAttribute('menuPic', 'contactMenu');
        $this->init();
        $this->form = new UserForm();
     }
  
    public function executeAboutUs(sfWebRequest $request) {
	$this->getUser()->setAttribute('menuPic', 'refMenu');
        $this->init();
    }
    
    public function executeFeed(sfWebRequest $request){
        $this->init();
    }
    
    public function executeMail(sfWebRequest $request){
        $this->init();
        $this->form = new UserForm();  
        $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
        if ($this->form->isValid()) {  
	    $message = new Message();  
	    $message->setTheme($this->form['message']['theme']->getValue());
	    $message->setMesage($this->form['message']['mesage']->getValue());
	    
	    unset($this->form['message']);
	    $user = $this->form->save();
	    $message->setUserId($user->getId());
	    $message->save();
            $this->getUser()->setFlash('message', 'Az üzenet elküldése sikeres!');
	    $this->redirect('elerhetosegek');
        } else { 
	    $this->setTemplate('contact');
	}
    }
  
}
