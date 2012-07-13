<?php

/**
 * Category filter form base class.
 *
 * @package    test
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'group_type' => new sfWidgetFormFilterInput(),
      'name_hu'    => new sfWidgetFormFilterInput(),
      'name_en'    => new sfWidgetFormFilterInput(),
      'name_ru'    => new sfWidgetFormFilterInput(),
      'name_pl'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'group_type' => new sfValidatorPass(array('required' => false)),
      'name_hu'    => new sfValidatorPass(array('required' => false)),
      'name_en'    => new sfValidatorPass(array('required' => false)),
      'name_ru'    => new sfValidatorPass(array('required' => false)),
      'name_pl'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'group_type' => 'Text',
      'name_hu'    => 'Text',
      'name_en'    => 'Text',
      'name_ru'    => 'Text',
      'name_pl'    => 'Text',
    );
  }
}
