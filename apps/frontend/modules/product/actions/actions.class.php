<?php

/**
 * product actions.
 *
 * @package    test
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions {
    
    protected function init(){
        $this->getUser()->setAttribute('leftMenuParams', null);
    }
    
    public function executeIndex(sfWebRequest $request) {
	$this->getUser()->setAttribute('menuPic', 'productMenu');
        $this->title    = 'Keresett termékek';
        $this->getUser()->setAttribute('leftMenuParams', null);
        $statement      = Doctrine_Manager::getInstance()->connection();
        $lang           = $this->getUser()->getCulture(); 
        $query          = "select * from product p 
                           where p.name_$lang like '%{$request->getParameter('name')}%' or p.description_$lang like '%{$request->getParameter('name')}%'";   #  print $query . ' - ' . $request->getParameter('name'); exit;
        $results        = $statement->execute($query);
        $this->products = $results->fetchAll();                                                #  print var_export($this->products, true); exit;
        $this->setTemplate('searc');
    }

    public function executeMugyantas_padlok(sfWebRequest $request) { 
	$this->getUser()->setAttribute('menuPic', 'productMenu');
        $this->title = 'Amerin műgyantás padlók';
        $this->categories = Doctrine_Core::getTable('Category')->findBy('group_type', 'mugyanta');
        $this->getUser()->setAttribute('leftMenuParams', array('site' => 'mugyanta', 'value' => $this->categories));
        $this->setTemplate('index');
    }
  
    public function executeVillamos_ipari_mugyantak(sfWebRequest $request) {
	$this->getUser()->setAttribute('menuPic', 'productMenu');
        $this->title = 'Villamosipari műgyanták';
        $this->categories = Doctrine_Core::getTable('Category')->findBy('group_type', 'villamos');
        $this->getUser()->setAttribute('leftMenuParams', array('site' => 'villamos', 'value' => $this->categories));
        $this->setTemplate('index');
    }
    
    
    public function executeShow(sfWebRequest $request) {
        $this->products = Doctrine_Core::getTable('Product')->findBy('category_id', $request->getParameter('id')); # print var_export($this->products, true); exit;
        $this->category = Doctrine_Core::getTable('Category')->find(array($request->getParameter('id')));
    }

    public function executeMainpage(sfWebRequest $request){
	$this->init();
	
    }
    
    /*
    public function executeNew(sfWebRequest $request) {
        $this->form = new ProductForm();
    }
    */
    
    /*
    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new ProductForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }
    */

    /*
    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);
    }
    */

    /*
    public function executeUpdate(sfWebRequest $request){
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }
    */
    
    /*
    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $product->delete();

        $this->redirect('product/index');
    }
    */

    /*
    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $product = $form->save();

            $this->redirect('product/edit?id='.$product->getId());
        }
    }
    */
    
    
}
