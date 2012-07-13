<?php

/**
 * news actions.
 *
 * @package    test_2/frontend
 * @subpackage news
 * @author     Krucsó Attila
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions {
    
    protected function init(){
        $this->getUser()->setAttribute('leftMenuParams', null);
    }
    
    public function executeIndex(sfWebRequest $request) {  
        $this->init();
        # $lang = $this->getUser()->getCulture();  # print 'lang: ' . ($lang ? $lang : 'hu'); 
        # $statement = Doctrine_Manager::getInstance()->connection();
        # $query = "select title_$lang as title, news_$lang as news, create_date from news ";
        # $results = $statement->execute($query);
        # $this->newss = $results->fetchAll(); #print var_export($this->newss, true); exit;
        
        
        if (!$request->getParameter('sf_culture')) { 
            if ($this->getUser()->isFirstRequest()) { 
                $culture = $request->getPreferredCulture(array('hu', 'en'));
                $this->getUser()->setCulture($culture);
                $this->getUser()->isFirstRequest(false);
            } else { 
                $culture = $this->getUser()->getCulture();
            }
            $this->redirect('localized_homepage');
        }
        
        $this->newss = Doctrine::getTable('News')->createQuery('a')->execute();
    }
    
    
     public function executeMainpage(sfWebRequest $request){
	$this->getUser()->setAttribute('menuPic', 'mainMenu');
	$this->init();
	$this->news = Doctrine::getTable('News')->createQuery('a')->limit(2)->execute();
	
    }
    
    
    
    /*
  public function executeShow(sfWebRequest $request)
  {
    $this->news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->news);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new NewsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new NewsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $this->form = new NewsForm($news);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $this->form = new NewsForm($news);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $news->delete();

    $this->redirect('news/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $news = $form->save();

      $this->redirect('news/edit?id='.$news->getId());
    }
  }
     */
}
