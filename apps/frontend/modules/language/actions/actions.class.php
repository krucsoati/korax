<?php

/**
 * language actions.
 *
 * @package    test_2/frontend
 * @subpackage language
 * @author     Krucsó Attila
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class languageActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->forward('default', 'module');
    }

    public function executeChangeLanguage(sfWebRequest $request) {  
        $this->getUser()->setCulture($request->getGetParameter('language'));
        $form = new sfFormLanguage( $this->getUser(), array('languages' => array('hu', 'en')));
        $form->process($request);
        return $this->redirect('localized_homepage');
    }

}
