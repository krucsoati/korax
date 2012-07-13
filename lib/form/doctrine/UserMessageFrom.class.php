<?php

class UserMessageForm extends UserForm {
    
    public function configure() {
        # parent::configure();
        # $this->embedForm('message', new MessageForm());
        # $this->embedRelation('Message');
        
        $message = new Message();
        $message->User = $this->getObject(); # print var_export(get_class($this->getObject()), true); exit;
 
        $form = new MessageForm($message);
 
        $this->embedForm('message', $form);
        
    }
    
    public function save($con = null){
        parent::save($con);
    }




    /*
    public function saveEmbeddedForms($con = null, $forms = null) {
        if (null === $forms) {
            $photos = $this->getValue('newPhotos');
            $forms = $this->embeddedForms;
            foreach ($this->embeddedForms['newPhotos'] as $name => $form) {
                if (!isset($photos[$name])) {
                    unset($forms['newPhotos'][$name]);
                }
            }
         }
 
        return parent::saveEmbeddedForms($con, $forms);
    }

    public function saveEmbeddedForms($con = null, $forms = null) {
        if (null === $forms) {
            #$photos = $this->getValue('newPhotos');
            $forms = $this->embeddedForms;
            foreach ($this->embeddedForms['newPhotos'] as $name => $form) {
                if (!isset($photos[$name])) {
                    unset($forms['newPhotos'][$name]);
                }
            }
         }
 
        return parent::saveEmbeddedForms($con, $forms);
    }
    */
    
    # public function save($con=null){
    #    $form = $this->embedForm('message', $form);
    # }
    
    
}
 ?>