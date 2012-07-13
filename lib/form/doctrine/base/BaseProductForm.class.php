<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'name_hu'        => new sfWidgetFormInputText(),
      'name_en'        => new sfWidgetFormInputText(),
      'name_ru'        => new sfWidgetFormInputText(),
      'name_pl'        => new sfWidgetFormInputText(),
      'description_hu' => new sfWidgetFormInputText(),
      'description_en' => new sfWidgetFormInputText(),
      'description_ru' => new sfWidgetFormInputText(),
      'description_pl' => new sfWidgetFormInputText(),
      'guide_hu'       => new sfWidgetFormInputText(),
      'guide_en'       => new sfWidgetFormInputText(),
      'guide_ru'       => new sfWidgetFormInputText(),
      'guide_pl'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'name_hu'        => new sfValidatorPass(array('required' => false)),
      'name_en'        => new sfValidatorPass(array('required' => false)),
      'name_ru'        => new sfValidatorPass(array('required' => false)),
      'name_pl'        => new sfValidatorPass(array('required' => false)),
      'description_hu' => new sfValidatorPass(array('required' => false)),
      'description_en' => new sfValidatorPass(array('required' => false)),
      'description_ru' => new sfValidatorPass(array('required' => false)),
      'description_pl' => new sfValidatorPass(array('required' => false)),
      'guide_hu'       => new sfValidatorPass(array('required' => false)),
      'guide_en'       => new sfValidatorPass(array('required' => false)),
      'guide_ru'       => new sfValidatorPass(array('required' => false)),
      'guide_pl'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
