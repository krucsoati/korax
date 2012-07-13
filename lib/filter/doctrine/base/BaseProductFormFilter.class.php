<?php

/**
 * Product filter form base class.
 *
 * @package    test
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'name_hu'        => new sfWidgetFormFilterInput(),
      'name_en'        => new sfWidgetFormFilterInput(),
      'name_ru'        => new sfWidgetFormFilterInput(),
      'name_pl'        => new sfWidgetFormFilterInput(),
      'description_hu' => new sfWidgetFormFilterInput(),
      'description_en' => new sfWidgetFormFilterInput(),
      'description_ru' => new sfWidgetFormFilterInput(),
      'description_pl' => new sfWidgetFormFilterInput(),
      'guide_hu'       => new sfWidgetFormFilterInput(),
      'guide_en'       => new sfWidgetFormFilterInput(),
      'guide_ru'       => new sfWidgetFormFilterInput(),
      'guide_pl'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'category_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
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

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'category_id'    => 'ForeignKey',
      'name_hu'        => 'Text',
      'name_en'        => 'Text',
      'name_ru'        => 'Text',
      'name_pl'        => 'Text',
      'description_hu' => 'Text',
      'description_en' => 'Text',
      'description_ru' => 'Text',
      'description_pl' => 'Text',
      'guide_hu'       => 'Text',
      'guide_en'       => 'Text',
      'guide_ru'       => 'Text',
      'guide_pl'       => 'Text',
    );
  }
}
