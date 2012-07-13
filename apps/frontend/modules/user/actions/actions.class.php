<?php

/**
 * user actions.
 *
 * @package    test
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions {
    
    protected function init(){
        $this->getUser()->setAttribute('leftMenuParams', null);
    }
    
    public function executeNew(sfWebRequest $request) {
	$this->getUser()->setAttribute('menuPic', 'newsMenu');
        $this->init();
        $this->form = new UserMailForm();
        if($request->isMethod(sfRequest::POST)){
            $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
            if ($this->form->isValid()) {
                $user = $this->form->save();
                $this->getUser()->setFlash('notice', 'A feliratkozás sikeres!');
            }
        }
    }

    /*
    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new UserForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $this->user_2 = $form->save();

            #print var_export($this->user_2->getEmail(), true); exit;
            
            $this->redirect('user/edit?id=' . $user->getId());
        }
    }    
    
    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
        $this->form = new UserForm($user);
    }
    */
    
    
    
  /*  
  public function executeIndex(sfWebRequest $request)
  {
    $this->users = Doctrine_Core::getTable('User')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->user = Doctrine_Core::getTable('User')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserForm($user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($user = Doctrine_Core::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
    $user->delete();

    $this->redirect('user/index');
  }
*/

}
