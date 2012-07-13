<?php
/**
 * Description of HirlevelForm
 *
 * @author ati
 */
class HirlevelForm extends BaseUserForm{
    public function configure(){
        $this->widgetSchema->setLabels(array(
            'name'       => 'Név',
            'email'       => 'Email'
        ));

    }
}

?>
