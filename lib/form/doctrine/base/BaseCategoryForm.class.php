<?php

/**
 * Category form base class.
 *
 * @method Category getObject() Returns the current form's model object
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'group_type' => new sfWidgetFormInputText(),
      'name_hu'    => new sfWidgetFormInputText(),
      'name_en'    => new sfWidgetFormInputText(),
      'name_ru'    => new sfWidgetFormInputText(),
      'name_pl'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'group_type' => new sfValidatorPass(array('required' => false)),
      'name_hu'    => new sfValidatorPass(array('required' => false)),
      'name_en'    => new sfValidatorPass(array('required' => false)),
      'name_ru'    => new sfValidatorPass(array('required' => false)),
      'name_pl'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

}
