<?php

/**
 * News filter form base class.
 *
 * @package    test
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNewsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'create_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'title_hu'    => new sfWidgetFormFilterInput(),
      'title_en'    => new sfWidgetFormFilterInput(),
      'title_ru'    => new sfWidgetFormFilterInput(),
      'title_pl'    => new sfWidgetFormFilterInput(),
      'news_hu'     => new sfWidgetFormFilterInput(),
      'news_en'     => new sfWidgetFormFilterInput(),
      'news_ru'     => new sfWidgetFormFilterInput(),
      'news_pl'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'create_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'title_hu'    => new sfValidatorPass(array('required' => false)),
      'title_en'    => new sfValidatorPass(array('required' => false)),
      'title_ru'    => new sfValidatorPass(array('required' => false)),
      'title_pl'    => new sfValidatorPass(array('required' => false)),
      'news_hu'     => new sfValidatorPass(array('required' => false)),
      'news_en'     => new sfValidatorPass(array('required' => false)),
      'news_ru'     => new sfValidatorPass(array('required' => false)),
      'news_pl'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('news_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'News';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'create_date' => 'Date',
      'title_hu'    => 'Text',
      'title_en'    => 'Text',
      'title_ru'    => 'Text',
      'title_pl'    => 'Text',
      'news_hu'     => 'Text',
      'news_en'     => 'Text',
      'news_ru'     => 'Text',
      'news_pl'     => 'Text',
    );
  }
}
